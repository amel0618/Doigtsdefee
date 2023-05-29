@extends('layout.layouthf')

    @section('content')

<!DOCTYPE html>
<html>

<head>
    <title>Mentions Légales</title>
</head>

<body>
    <h2>Mentions Légales</h2>

    <h3>Informations légales</h3>
    <p>Raison sociale : Doigts de fée</p>
    <p>Forme juridique : micro-entreprise</p>
    <p>Adresse : 2 bis rue de l'abreuvoir 36100 Issoudun</p>
    <p>Téléphone : 09 88 55 50 11</p>
    <p>Email : [Adresse email de votre institut]</p>
    <p>Numéro SIRET : [Numéro SIRET de votre institut]</p>

    <h3>Responsable du contenu</h3>
    <p>Nom : Vie</p>
    <p>Adresse : [Adresse du responsable]</p>
    <p>Email : [Adresse email du responsable]</p>

    <h3>Hébergement du site</h3>
    <p>Nom de l'hébergeur : [Nom de l'hébergeur]</p>
    <p>Adresse : [Adresse de l'hébergeur]</p>
    <p>Téléphone : [Numéro de téléphone de l'hébergeur]</p>
    <p>Email : [Adresse email de l'hébergeur]</p>

    <h3>Propriété intellectuelle</h3>
    <p>Tous les contenus présents sur ce site (textes, images, logos, etc.) sont protégés par les lois relatives à la propriété intellectuelle.</p>
    <p>Toute reproduction, distribution ou utilisation non autorisée du contenu est strictement interdite.</p>

    <h3>Liens externes</h3>
    <p>Le site peut contenir des liens vers des sites externes sur lesquels nous n'avons aucun contrôle.</p>
    <p>Nous déclinons donc toute responsabilité concernant le contenu ou les pratiques de ces sites externes.</p>

    <h3>Protection des données personnelles</h3>
    <p>Nous nous engageons à respecter la confidentialité de vos données personnelles conformément aux lois en vigueur.</p>
    <p>Pour plus d'informations, veuillez consulter notre politique de confidentialité.</p>
</body>

@endsection
</html>

<style>
    body {
        text-align: center;
    }
    h2 {
        text-align: center;
        font-size: 40px;
    }

    @media screen and (max-width: 768px) {
       h2 {
        font-size: 25px;
       }

       .politique {
        margin: 0;
       }
    }
</style>
