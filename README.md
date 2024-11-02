# desarrollo-sdc-con-sdc-styleguide
Pequeño proyecto en Drupal 11 que tiene como objetivo mostrar como desarrollar SDC usando el módulo SDC Stylegide.

## Requerimientos
* Lando (por ende Docker) o configurarlo su ambiente de trabajo favorito.

## Inicio (usando Lando)
* `lando start`

## Inicio (la primera vez únicamente)
* `lando composer install`
* `lando drush si -y --existing-config`

## Como ver la guía
* Ir a https://sdc.lndo.site/styleguide/explorer

## Desarrollo de componentes
* Crear componentes usando su método favorito, ejemplo `lando drush generate sdc`
* Ver el formulario de demo en el explorador.
* Generar un demo usando su método favorito, ejemplo `lando drush generate sdcs-demo`
* Ver los demos (próximanete stories).
