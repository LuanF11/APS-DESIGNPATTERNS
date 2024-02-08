<?php
interface GUIFactory {
    public function createButton(): Button;
    public function createWindow(): Window;
    public function createCursor(): Cursor;
    public function createSelect(): Select;
    public function createInput(): Input;
}

class WindowsFactory implements GUIFactory {
    public function createButton(): Button {
        return new WindowsButton();
    }

    public function createWindow(): Window {
        return new WindowsWindow();
    }

    public function createCursor(): Cursor {
        return new WindowsCursor();
    }

    public function createSelect(): Select {
        return new WindowsSelect();
    }

    public function createInput(): Input {
        return new WindowsInput();
    }
}

class MacOSFactory implements GUIFactory {
    public function createButton(): Button {
        return new MacOSButton();
    }

    public function createWindow(): Window {
        return new MacOSWindow();
    }

    public function createCursor(): Cursor {
        return new MacOSCursor();
    }

    public function createSelect(): Select {
        return new MacOSSelect();
    }

    public function createInput(): Input {
        return new MacOSInput();
    }
}

interface Button {
    public function render(): void;
}


class WindowsButton implements Button {
    public function render(): void {
        echo "Renderizar botão windows\n";
    }
}

class MacOSButton implements Button {
    public function render(): void {
        echo "Renderizar botão macOs\n";
    }
}

interface Window {
    public function render(): void;
}

class WindowsWindow implements Window {
    public function render(): void {
        echo "Redenrizar janeça windows\n";
    }
}

class MacOSWindow implements Window {
    public function render(): void {
        echo "Redenrizar janela macOs\n";
    }
}

interface Cursor {
    public function render(): void;
}

class WindowsCursor implements Cursor {
    public function render(): void {
        echo "Redenrizar cursor windows\n";
    }
}

class MacOSCursor implements Cursor {
    public function render(): void {
        echo "Redenrizar cursos macOs\n";
    }
}

interface Select {
    public function render(): void;
}

class WindowsSelect implements Select {
    public function render(): void {
        echo "Redenrizar select windows\n";
    }
}

class MacOSSelect implements Select {
    public function render(): void {
        echo "Redenrizar select macOs\n";
    }
}

interface Input {
    public function render(): void;
}

class WindowsInput implements Input {
    public function render(): void {
        echo "Redenrizar input windows\n";
    }
}

class MacOSInput implements Input {
    public function render(): void {
        echo "Redenrizar input macOs\n";
    }
}

function createGUI(GUIFactory $factory): void {
    $button = $factory->createButton();
    $window = $factory->createWindow();
    $cursor = $factory->createCursor();
    $select = $factory->createSelect();
    $input = $factory->createInput();

    $button->render();
    $window->render();
    $cursor->render();
    $select->render();
    $input->render();
}

$os = "windows";

if ($os === "windows") {
    $factory = new WindowsFactory();
} elseif ($os === "macos") {
    $factory = new MacOSFactory();
} else {
    echo "Sistema não suportado\n";
}

createGUI($factory);
