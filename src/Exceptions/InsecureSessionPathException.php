<?php

declare(strict_types=1);

namespace Marko\Session\File\Exceptions;

use Marko\Core\Exceptions\MarkoException;

class InsecureSessionPathException extends MarkoException
{
    public static function insidePublicDirectory(
        string $path,
        string $publicDirectory,
    ): self {
        return new self(
            message: 'Refusing to store sessions inside the public directory',
            context: "Resolved session path: $path (public directory: $publicDirectory)",
            suggestion: "Set session.path to a directory outside public/, such as 'storage/sessions' (relative paths resolve against the project root)",
        );
    }
}
