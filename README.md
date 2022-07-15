# Introduction
This package to prepare to update the https://github.com/fusioncms/cms package from `v6.0.0-beta.10` to `v6.0.0-nightly`, or else directly update will cause migration error.

# How to
To update https://github.com/fusioncms/cms package from `v6.0.0-beta.10` to `v6.0.0-nightly`, please run the following command before you update the package.

```
composer require antweb/fusioncms-preupdate
php atrisan migrate
```
