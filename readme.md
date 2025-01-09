# TD Coffea Cookies

Un site de vente de café à emporter a été réalisé en statique en HTML/CSS
Le but de l'exercice va être de dynamiser l'ensemble des fichiers `html` en les transformant en templates `php`

## Découpage du code

Il va falloir ranger un peu tout ça : dans un premier temps on va créer les dossiers `templates` et `pages` pour y ranger les différents composants sous forme de fichiers `php` :
- la page `americano`
- la page `carte`
- la page `connexion`
- la page `contact`
- la page `expresso`
- la page `index_connect`
- la page `index` (laisser à la racine)
- la page `macchiato`
- la page `mocaccino`
- la page `ristretto`

- la page `index_connect`
- la page `edit`
- la page `new`
- la page `backoffice`

- le template `header`
- le template `footer`

Attention, pour les liens entre les différentes pages, il va maintenant falloir tenir compte de l'organisation des fichiers dans des dossiers séparés. Même chose pour les liens des images : il faut rétablir ce qui a été cassé avant d'aller plus loin. Faites le fichier par fichier et testez bien tout avant de passer au fichier suivant.

L'interface Administrateur est composée de 4 pages pour le moment :
- `index_connect.html`
- `edit.html`
- `new.html`
- `backoffice.html`

Le header est différent dans ces pages-là...

## Dynamisation du code

On va regrouper les contenus dans un tableau indexé, puis afficher ces contenus `php` dans des balises `html`. Le tableau sera de la forme suivante :

```php
$cafes = [
    [
        'nom' => '...',
        'description' => '...',
        'ingredients' => [
            '...',
            '...',
            '...'
        ],
        'prix' => 0.00,
        'volume' => 0
    ],
    [
        'nom' => '...',
        'description' => '...',
        'ingredients' => [
            '...',
            '...',
            '...'
        ],
        'prix' => 0.00,
        'volume' => 0
    ],
    //...
]
```
Dynamiser la page `index.php` avec le tableau obtenu.
Dynamiser les page `carte.php` et `backoffice.php`, puis les pages descriptives de chaque café (`americano.php`, `cappuccino.php`...)

## Bonus : Superglobales en PHP

Grâce à la superglobale `$_GET` qui permet de récupérer des données depuis l'url, essayez d'afficher chacun des cafés avec un fichier unique du type `single_cafe.php` puis réorganisez les liens dans `index.php` et `carte.php`

Enfin, dynamisez le formulaire `edit.php` avec la même méthode et `$_GET` et actualisez les liens dans `backoffice.php`
