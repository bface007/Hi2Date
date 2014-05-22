Hi2Date 
=========

Hi2Date est une application web de e-meeting.



L'application est pour l'instant en plein developpement.  

Version
----

0.1-dev

Tech
-----------

Hi2Date est servi en php sous Symfony2 et utilise comme bundles:

* [FOSUserBundle] - Un bundle de gestion des utilisateurs.
* [FOSMessageBundle] - Un bundle de gestion de messagerie.
* [FOSRestBundle] - Un bundle de creétion d'api RESTFul.
* [JMSSecurityExtraBundle] - Un bundle qui améliore la sécurité initial de Symfony2.
* [JMSSerializerBundle] - Un bundle qui permet de sérializer ses données en requête retournée en formats tels que JSON,XML ou YAML et vice versa.
* [ExerciseHTMLPurifierBundle] - Un bundle qui intègre [HTMLPurifier], une librairie qui filtre les données contre les attaques XSS.
* [MisdPhoneNumberBundle] - Ce bundle intègre la librairie [Google's libphonenumber](https://code.google.com/p/libphonenumber/) dans l'application Symfony2 à travers le port [giggsey/libphonenumber-for-php](https://github.com/giggsey/libphonenumber-for-php) 

Installation
--------------

```sh
git clone [git-repo-url] hi2date
cd hi2date

```

License
----

MIT


**By Bface007**

[HTMLPurifier]: http://htmlpurifier.org/
[git-repo-url]: https://github.com/bface007/Hi2Date.git

    