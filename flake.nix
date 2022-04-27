{
  description = "LaTeX Document";

  inputs = {
    nixpkgs.url = github:NixOS/nixpkgs/nixpkgs-unstable;
    flake-utils.url = github:numtide/flake-utils;
  };

  outputs = { self, nixpkgs, flake-utils }:
    with flake-utils.lib; eachSystem allSystems (system:
      let
        version = self.shortRev or self.lastModifiedDate;

        pkgs = nixpkgs.legacyPackages.${system};

        tex = pkgs.texlive.combine {
          inherit (pkgs.texlive) scheme-full latex-bin latexmk;
        };

        documentProperties = {
          name = "session";
          inputs = [
            pkgs.coreutils
            tex
            pkgs.gnumake
            pkgs.plantuml
          ];
        };

        documentDrv = pkgs.stdenvNoCC.mkDerivation {
          name = "${documentProperties.name}-${version}";
          src = self;
          buildInputs = documentProperties.inputs;

          configurePhase = ''
            runHook preConfigure
            substituteInPlace "src/session/version.tex" \
              --replace "dev-local" "${version}"
            runHook postConfigure
          '';

          installPhase = ''
            runHook preInstall
            cp build/session.pdf $out
            runHook postInstall
          '';
        };
      in
      rec {
        # Nix shell / nix build
        defaultPackage = documentDrv;

        # Nix develop
        devShell = pkgs.mkShellNoCC {
          name = documentProperties.name;
          buildInputs = documentProperties.inputs;
        };
      });
}
