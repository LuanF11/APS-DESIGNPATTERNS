<?php

interface RendererFactory {
    public function createTextureRenderer(): TextureRenderer;
    public function createShadowRenderer(): ShadowRenderer;
    public function createModelRenderer(): ModelRenderer;
}

class OpenGLRendererFactory implements RendererFactory {
    private static $instance;

    private function __construct() {}

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function createTextureRenderer(): TextureRenderer {
        return new OpenGLTextureRenderer();
    }

    public function createShadowRenderer(): ShadowRenderer {
        return new OpenGLShadowRenderer();
    }

    public function createModelRenderer(): ModelRenderer {
        return new OpenGLModelRenderer();
    }
}

class DirectXRendererFactory implements RendererFactory {
    private static $instance;

    private function __construct() {}

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function createTextureRenderer(): TextureRenderer {
        return new DirectXTextureRenderer();
    }

    public function createShadowRenderer(): ShadowRenderer {
        return new DirectXShadowRenderer();
    }

    public function createModelRenderer(): ModelRenderer {
        return new DirectXModelRenderer();
    }
}

interface TextureRenderer {
    public function renderTexture();
}

class OpenGLTextureRenderer implements TextureRenderer {
    public function renderTexture() {
        echo "Renderizando textura  OpenGL\n";
    }
}

class DirectXTextureRenderer implements TextureRenderer {
    public function renderTexture() {
        echo "Renderizando textura  DirectX\n";
    }
}

interface ShadowRenderer {
    public function renderShadow();
}

class OpenGLShadowRenderer implements ShadowRenderer {
    public function renderShadow() {
        echo "Renderizando sombra  OpenGL\n";
    }
}

class DirectXShadowRenderer implements ShadowRenderer {
    public function renderShadow() {
        echo "Renderizando sombra  DirectX\n";
    }
}

interface ModelRenderer {
    public function renderModel();
}

class OpenGLModelRenderer implements ModelRenderer {
    public function renderModel() {
        echo "Renderizando modelo  OpenGL\n";
    }
}

class DirectXModelRenderer implements ModelRenderer {
    public function renderModel() {
        echo "Renderizando modelo  DirectX\n";
    }
}

$rendererFactory = OpenGLRendererFactory::getInstance();

$textureRenderer = $rendererFactory->createTextureRenderer();
$textureRenderer->renderTexture();

$shadowRenderer = $rendererFactory->createShadowRenderer();
$shadowRenderer->renderShadow();

$modelRenderer = $rendererFactory->createModelRenderer();
$modelRenderer->renderModel();
