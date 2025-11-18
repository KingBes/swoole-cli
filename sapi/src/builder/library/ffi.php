<?php

use SwooleCli\Library;
use SwooleCli\Preprocessor;

return function (Preprocessor $p) {
    $ffi_prefix = $p->getGlobalPrefix() . '/ffi';
    $p->addLibrary(
        (new Library('ffi'))
            ->withHomePage('https://www.php.net/manual/en/book.ffi.php')
            ->withPrefix($ffi_prefix)
            ->withConfigure('--with-ffi')
            ->withDependentLibraries('libffi')
            ->withLicense('PHP License')
    );
};
