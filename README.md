# Symfony Bundle Skeleton

A minimal Symfony bundle recommended to create new bundles. It includes [an assistant](https://github.com/yceruto/bundle-flex) 
to help you create the basic structure of the new bundle following the [Symfony Best Practices](https://symfony.com/doc/current/best_practices.html).

## Installation

```bash
composer create-project yceruto/bundle-skeleton <your-bundle-name>
```

During the bundle installation, you will be asked for the following information:
 * `Composer package name`: The name of the bundle package.
 * `Composer package description`: The description of the bundle package.
 * `Will the bundle contain a config definition?`: If yes, the assistant will create a `config/definition.php` file.
 * `Will the bundle contain Web assets?`: If yes, the assistant will create a `public` and `assets` directories.
 * `Will the bundle contain Twig templates?`: If yes, the assistant will create a `templates` directory and will add the `symfony/twig-bundle` package as a required dependency.
 * `Will the bundle contain translations?`: If yes, the assistant will create a `translations` directory and will add the `symfony/translation` package as a required dependency.
 * `Will the bundle contain controllers?`: If yes, the assistant will create a `src/Controller/DefaultController.php` and the `config/routes.php` files.

## License

This software is published under the [MIT License](LICENSE)
