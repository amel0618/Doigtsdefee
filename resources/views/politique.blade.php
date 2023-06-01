@extends('layout.layouthf')
@section('content')

<h2>Politique de confidentialité</h2>
<div class="politique">
    <p>
        Nous, à Doigts de fée, attachons une grande importance à la confidentialité et à la sécurité des informations personnelles de nos clients. Cette politique de confidentialité explique comment nous collectons, utilisons, stockons et protégeons les données que vous nous fournissez lors de la prise de rendez-vous sur notre site.

    <h3>Collecte de données personnelles</h3>
    Lorsque vous utilisez notre site pour prendre rendez-vous, nous vous demandons de fournir certaines informations personnelles telles que votre nom, prénom, adresse e-mail et numéro de téléphone. Ces informations nous permettent de vous contacter et de confirmer votre rendez-vous.

    <h3>Utilisation des données personnelles</h3>
    Les informations personnelles que vous nous fournissez sont utilisées uniquement dans le cadre de la prise de rendez-vous et de la gestion de vos services d'onglerie. Nous ne partagerons pas vos informations avec des tiers sans votre consentement préalable, sauf si cela est nécessaire pour respecter les lois en vigueur ou pour protéger nos droits légaux.

    <h3>Protection des données personnelles</h3>
    Nous prenons des mesures de sécurité appropriées pour protéger vos données personnelles contre tout accès non autorisé, utilisation abusive ou divulgation. Nous utilisons des protocoles de sécurité avancés pour garantir la sécurité de vos informations.

    <h3>Conservation des données personnelles</h3>
    Nous ne conservons vos données personnelles que pendant la durée nécessaire à la fourniture des services d'onglerie que vous avez demandés. Une fois cette période expirée, nous supprimerons vos données conformément à nos politiques de conservation des données.

    <h3>Cookies et technologies similaires</h3>
    Nous utilisons des cookies et d'autres technologies similaires pour améliorer votre expérience sur notre site. Ces cookies ne contiennent pas d'informations personnelles identifiables et sont utilisés à des fins statistiques et d'analyse.

    <h3>Vos droits</h3>
    Vous avez le droit d'accéder, de corriger, de mettre à jour ou de supprimer vos informations personnelles. Si vous souhaitez exercer ces droits ou avoir des questions sur notre politique de confidentialité, veuillez nous contacter à l'adresse suivante : [adresse e-mail ou coordonnées de contact].

    <h3>Modifications de la politique de confidentialité</h3>
    Nous nous réservons le droit de modifier cette politique de confidentialité à tout moment. Toutes les modifications seront publiées sur cette page. Nous vous encourageons à consulter régulièrement cette page pour rester informé de toute mise à jour.
    </p>
</div>

@endsection
<style>
    h2 {
        text-align: center;
        font-size: 40px;
    }

    .politique {
        margin: 50px;
    }

    p{
        text-align: center;
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