=== Plugin Name ===
Contributors: unicorn03, unicorn07, erku, alexclassroom,
Donate link: https://tentacleplugins.com/
Tags: headers security, hsts, http headers, insecure content, force ssl, headers, login security, xss, clickjacking, mitm, cross origin, cross site, privacy, csp
Requires at least: 4.7
Tested up to: 6.4
Stable tag: 5.0.30
Requires PHP: 7.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Best all-in-one WordPress security plugin, uses HTTP & HSTS response headers to avoid vulnerabilities: XSS, injection, clickjacking. Force HTTP/HTTPS.

== Description ==

= ENGLISH =

**Headers Security Advanced & HSTS WP** is Best all-in-one a free plug-in for all WordPress users. Deactivating this plugin will return your site configuration exactly to the state it was in before.

The **Headers Security Advanced & HSTS WP** project implements HTTP response headers that your site can use to increase the security of your website. The plug-in will automatically set up all Best Practices (you don't have to think about anything), these HTTP response headers can prevent modern browsers from running into easily predictable vulnerabilities. The Headers Security Advanced & HSTS WP project wants to popularize and increase awareness and usage of these headers for all wordpress users.

This plugin is developed by TentaclePlugins by irn3, we care about WordPress security and best practices.

Check out the best features of **Headers Security Advanced & HSTS WP:**

  * HSA Limit Login to block brute force attacks.
  * X-XSS-Protection
  * Expect-CT
  * Access-Control-Allow-Origin
  * Access-Control-Allow-Methods
  * Access-Control-Allow-Headers
  * X-Content-Security-Policy
  * X-Content-Type-Options
  * X-Frame-Options
  * X-Permitted-Cross-Domain-Policies
  * X-Powered-By
  * Content-Security-Policy
  * Referrer-Policy
  * HTTP Strict Transport Security / HSTS
  * Content-Security-Policy
  * Clear-Site-Data
  * Cross-Origin-Embedder-Policy-Report-Only
  * Cross-Origin-Opener-Policy-Report-Only
  * Cross-Origin-Embedder-Policy
  * Cross-Origin-Opener-Policy
  * Cross-Origin-Resource-Policy
  * Permissions-Policy
  * Strict-dynamic
  * Strict-Transport-Security
  * FLoC (Federated Learning of Cohorts)

**Headers Security Advanced & HSTS WP** is based on **OWASP CSRF** to protect your wordpress site. Using OWASP CSRF, once the plugin is installed, it will provide full CSRF mitigation without having to call a method to use nonce on the output. The site will be secure despite having other vulnerable plugins (CSRF).

HTTP security headers are a critical part of your website's security. After automatic implementation with Headers Security Advanced & HSTS WP, they protect you from the most notorious types of attacks your site might encounter. These headers protect against XSS, code injection, clickjacking, etc.

We have put a lot of effort into making the most important services operational with **Content Security Policy (CSP)**, below are some examples that we have tested and used with **Headers Security Advanced & HSTS WP**:

  * CSP usage for **Google Tag Manager**
    world's most popular tag manager
  * Using CSP for **Gravatar**
    Avatar service for WordPress and Social sites
  * Using CSP for **Wordpress Internal Media**
    support Wordpress media
  * Using CSP for **Youtube Embedded Video SDK**
    support Youtube embedded frames and JS SDK
  * CSP usage for **CookieLaw**
    privacy technology to meet regulatory requirements
  * CSP usage for **Mailchimp**
    support for Mailchimp automation, SDK and modules
  * CSP usage for **Google Analytics**
    support for basic conversion domains such as: stats.g.doubleclick.net and www.google.com
  * CSP usage for **Google Fonts**
    you're not loading it on the page, chances are one of your SDKs is using it
  * Using CSP for **Facebook
    support Facebook SDK functionality
  * Using CSP for **Stripe**
    highly secure online payment system
  * Using CSP for **New Relic**
    it's a registration and monitoring utility
  * Using CSP for **Linkedin Tags + SDKs**
    support Linkedin Insight, Linkedin Ads and SDK
  * Using CSP for **OneTrust**
    OneTrust support helps companies manage privacy requirements
  * CSP usage for **Moat**
    Moat support to measurement suite such as: ad verification, brand safety, advertising and coverage
  * CSP usage for **jQuery**
    support of jQuery - JS library
  * CSP usage for **Twitter Widgets & SDKs**
    support Connect, Widgets and the Twitter client-side SDK
  * Using CSP for **Google Maps**
    support Google Maps as The ggpht used by streetview
  * Using CSP for **Quantcast Choice**
    Quantcast support for privacy such as GDPR and CCPA
  * CSP usage for **Twitter Ads & Analytics**
    Twitter support for advertising and Analytics
  * Using CSP for **Paypal**
    PayPal support for online payment system
  * Using CSP for **Drift**
    Drift and Driftt support
  * CSP usage for **Cookiebot**
    cookie and tracker support, GDPR/ePrivacy and CCPA compliance
  * CSP usage for **Vimeo Embedded Videos SDK**
    support frames, JS SDK, Froogaloop integration
  * Using CSP for **AppNexus (now Xandr)**
    AppNexus support for custom retargeting
  * Using CSP for **Mixpanel**
    support analytics tool with SDK/JS to collect client-side data
  * Using CSP for **Font Awesome**
    toolkit support for fonts and icons over CSS and Less
  * Using CSP for **Google reCAPTCHA**
    reCAPTCHA support for fraud and bot protection
  * CSP usage for **Bootstrap** CDN
    Bootstrap support for CSS frameworks
  * Using CSP for **HubSpot**
    Hubspot support with many features, used for monitoring and mkt functionality
  * Using CSP for **Hotjar**
    Hotjar tracker support for analytics and metrics
  * Using CSP for **WP.com**
    support for wp.com hosting
  * Using CSP for **Akamai mPulse**
    support for Akamai mPulse, for origin and perimeter integrations
  * CSP usage for **Cloudflare - Rocket-Loader & Mirage**
    support for Mirage libraries for performance acceleration
  * Using CSP for **Cloudflare - CDN.js**
    Cloudflare's open CDN support with multiple libraries
  * Using CSP for **jsDelivr**
    support jsDelivr free CDN for Open Source
    
**Headers Security Advanced & HSTS WP** is based on the OWASP CSRF standard to protect your wordpress site. Using the OWASP CSRF standard, once the plugin is installed, you can customize CSP rules for full CSRF mitigation. The site will be secure despite having other vulnerable plugins (CSRF).

**All Free Features**
The **Headers Security Advanced & HSTS WP** version includes all the free features.

We have implemented **FLoC (Federated Learning of Cohorts)**, using best practices. First, using **Headers Security Advanced & HSTS WP** prevents the browser from including your site in the "cohort calculation" on **FLoC (Federated Learning of Cohorts)**. This means that nothing can call document.interestCohort() to get the FLoC ID of the currently used client. Obviously, this does nothing outside of your currently visited site and does not "disable" FLoC on the client beyond that scope.

Even though **FLoC** is still fairly new and not yet widely supported, as programmers we think that privacy protection elements are important, so we choose to give you the feature of being opt out of FLoC! We’ve created a special **“automatic blocking of FLoC”** feature, trying to always **offer the best tool with privacy protection and cyber security** as main targets and focus.

Analyze your site before and after using *Headers Security Advanced & HSTS WP* security headers are self-configured according to HTTP Security Headers and HTTP Strict Transport Security / HSTS best practices.

* Check HTTP Security Headers on <a href="https://securityheaders.com/" target="_blank">securityheaders.com</a> 
* Check HTTP Strict Transport Security / HSTS at <a href="https://hstspreload.org/" target="_blank">hstspreload.org</a>
* Check WebPageTest at <a href="https://www.webpagetest.org/" target="_blank">webpagetest.org</a>
* Check HSTS test website <a href="https://gf.dev/hsts-test/" target="_blank">gf.dev/hsts-test</a>
* Check CSP test website <a href="https://csper.io/evaluator" target="_blank">csper.io/evaluator</a>
* Check CSP Evaluator <a href="https://csp-evaluator.withgoogle.com/" target="_blank">csp-evaluator.withgoogle.com</a>
* CSP Content Security Policy Generator <a href="https://addons.mozilla.org/en-US/firefox/addon/content-security-policy-gen/" target="_blank">addons.mozilla.org</a>

This plugin is updated periodically, our limited support is free, we are available for your feedback (bugs, compatibility issues or recommendations for next updates). We are usually fast :-D.

== Frequently Asked Questions ==

= How do you get an A+ grade? =

To earn an A+ grade, your site must issue all HTTP response headers that we check. This indicates a high level of commitment to improving the security of your visitors.

= What headers are recommended? =

Over an HTTP connection we get Content-Security-Policy, X-Content-Type-Options, X-Frame-Options and X-XSS-Protection. Via an HTTPS connection, 2 additional headers are checked for presence which are Strict-Transport-Security and Public-Key-Pins.

* Once the plug-in is activated it performs a test (before and after): <a href="https://securityheaders.com/" target="_blank">https://securityheaders.com/</a>

= Can the plugin create slowdowns? =

No, Headers Security Advanced & HSTS WP is Fast, Secure and does not affect the SEO and speed of your website.

= What is HSTS (Strict Transport Security)? =

It was created as a solution to force the browser to use secure connections when a site is running on HTTPS. It is a security header that is added to the web server and reflected in the response header as Strict-Transport-Security. HSTS is important because it addresses the following anomalies:

= Check before and after using Preload HSTS =

This step is important to submit your website and/or domain to an approved HSTS list. Google officially compiles this list and it is used by Chrome, Firefox, Opera, Safari, IE11 and Edge. You can forward your site to the official HSTS preload directory. ('https://hstspreload.org/')

= how to use HTTP Strict Transport Security (HSTS) =

If you want to use Preload HSTS for your site, there are a few requirements before you can activate it.

* Have a valid SSL certificate. You can't do any of this anyway without it.
* You must redirect all HTTP traffic to HTTPS (recommended via permanent 301 redirects). This means that your site should be HTTPS only.
* You need to serve all subdomains in HTTPS as well. If you have subdomains, you will need an SSL certificate.

The HSTS header on your base domain (for example: example.com) is already configured you just need to activate the plug-in.

If you want to check the HSTS status of your site, you can do so here: <a href="https://hstspreload.org/" target="_blank">https://hstspreload.org/</a>

= Can I report a bug or request a feature? =

You can report bugs or request new features right <a href="mailto:support@tentacleplugins.com">support@tentacleplugins[dot]com</a>

= Disable FLoC, Google's advertising technology =

FLoC is a mega tracker that monitors user activity on all sites, stores the information in the browser, and then uses machine learning to place users into cohorts with similar interests. This way, advertisers can target groups of people with similar interests. Plus, according to Google's own testing, FLoC achieves at least 95% more conversions than cookies.

= Who is disabling FLoC by Google? =

Scott Helme reported that as of May 3, already 967 of the first 1 million domains had disabled FLoC's interest-cohort in their Permissions-Policy header. That list included some big sites like The Guardian and IKEA.

= Do you use CloudFlare and the Headers Security Advanced & HSTS WP plugin? =

Are you experiencing any anomalies after a plugin update? If yes, please follow these instructions: clear the cache directly to the CloudFlare Client Area

* Log in to your Cloudflare dashboard, and select your account and domain.
* Select Caching > Configuration.
* Under Cache Purge, select Custom Purge. The custom purge window will be displayed.
* Under Purge by, select URL.
* Enter the appropriate values in the text field using the format shown in the example.
* Run through the additional instructions to complete the form.
* Review the data entered.
* Click Delete.

This will cause the <a href="https://developers.cloudflare.com/cache/how-to/purge-cache/" target="_blank">cloudFlare</a>

== Installation ==

= ITALIAN =

1. Vai in Plugin 'Aggiungi nuovo'.
2. Cerca Headers Security Advanced & HSTS WP.
3. Cerca questo plugin, scaricalo e attivalo.
4. Vai in 'impostazioni' > 'Permalink'. Cambia il tuo url di login alla voce 'Security Url'.
5. Puoi cambiare questa opzione quando vuoi, Headers Security Advanced & HSTS WP viene impostato in automatico.

= ENGLISH =

1. Go to Plugins 'Add New'.
2. Search for Headers Security Advanced & HSTS WP.
3. Search for this plugin, download and activate it.
4. You can change this option whenever you want, Headers Security Advanced & HSTS WP is set automatically.

= FRANÇAIS =

1. Allez dans Plugins 'Add new'.
2. Recherchez Headers Security Advanced & HSTS WP.
3. Recherchez ce plugin, téléchargez-le et activez-le.
4. Vous pouvez modifier cette option quand vous le souhaitez, Headers Security Advanced & HSTS WP est réglé automatiquement.

= DEUTSCH =

1. Gehen Sie zu Plugins 'Neu hinzufügen'.
2. Suchen Sie nach Headers Security Advanced & HSTS WP.
3. Suchen Sie nach diesem Plugin, laden Sie es herunter und aktivieren Sie es.
4. Sie können diese Option jederzeit ändern, Headers Security Advanced & HSTS WP wird automatisch eingestellt.

== Screenshots ==

1. Check HTTP Security Headers (AFTER)
2. Check HTTP Security Headers (BEFORE)
3. Check HTTP Strict Transport Security / HSTS (list)
4. Check WebPageTest (AFTER)
5. Check WebPageTest (BEFORE)
6. Setting on single site installation
7. Check HTTP Security Headers - Serpworx (AFTER)
8. Check HTTP Security Headers - Serpworx (BEFORE)
9. Site-wide security setting

== Changelog ==

= 5.0.30 =
We don't want to tell you what to do, but here's the point: if you've updated the Headers Security Advanced & HSTS WP plugin last time, you've seen that when we suggest doing so, we don't just say it and leave it at that. Well, with this 5.0.30 version we've added and fixed a lot (we got rid of some bugs, tidied up some pesky pixels and updated the graphics) and it all works great. Are we agreed? Touch "update" and we'll provide you with the most beautiful, fastest, and most impressive plugin around. Enjoy!
- New: compatibility with Wordpress version 6.4
- fix: Preparation with a graphical update on some functionalities.
- Update: Optimised the weight of the plugin (-13%), it will now be even lighter.

= 5.0.29 =
We don't want to tell you what to do, but here's the point: if you've updated the Headers Security Advanced & HSTS WP plugin last time, you've seen that when we suggest doing so, we don't just say it and leave it at that. Well, with this 5.0.29 version we've added and fixed a lot (we got rid of some bugs, tidied up some pesky pixels and updated the graphics) and it all works great. Are we agreed? Touch "update" and we'll provide you with the most beautiful, fastest, and most impressive plugin around. Enjoy!
- New: compatibility with Wordpress version 6.3.1.
- New: Preparation with a graphical update on some functionalities.
- Update: Optimised the weight of the plugin (-18%), it will now be even lighter.

= 5.0.28 =
We don't want to tell you what to do, but here's the point: if you've updated the Headers Security Advanced & HSTS WP plugin last time, you've seen that when we suggest doing so, we don't just say it and leave it at that. Well, with this 5.0.28 version we've added and fixed a lot (we got rid of some bugs, tidied up some pesky pixels and updated the graphics) and it all works great. Are we agreed? Touch "update" and we'll provide you with the most beautiful, fastest, and most impressive plugin around. Enjoy!
- Delete: this version only fixes a small fix on the "window-management" value.
- Fixed: there could occur a warning "Error with Permissions-Policy header: Unrecognized feature: 'interest-cohort'", now it has been fixed.

= 5.0.27 =
We don't want to tell you what to do, but here's the point: if you've updated the Headers Security Advanced & HSTS WP plugin last time, you've seen that when we suggest doing so, we don't just say it and leave it at that. Well, with this 5.0.27 version we've added and fixed a lot (we got rid of some bugs, tidied up some pesky pixels and updated the graphics) and it all works great. Are we agreed? Touch "update" and we'll provide you with the most beautiful, fastest, and most impressive plugin around. Enjoy!
- Fixed: this version only fixes a small fix on the "window-management" value.

= 5.0.26 =
We don't want to tell you what to do, but here's the point: if you've updated the Headers Security Advanced & HSTS WP plugin last time, you've seen that when we suggest doing so, we don't just say it and leave it at that. Well, with this 5.0.26 version we've added and fixed a lot (we got rid of some bugs, tidied up some pesky pixels and updated the graphics) and it all works great. Are we agreed? Touch "update" and we'll provide you with the most beautiful, fastest, and most impressive plugin around. Enjoy!
- Fixed: problem with Google's Federated Learning of Cohorts (FLoC) features.
- Update: after topic the value "window-placement=()" was removed because it was deprecated.
- New: In this update, a custom field was added in the plugin settings to enter CSP practices to be authorized (see quick questions and answers for recommended tools).

= 5.0.25 =
We don't want to tell you what to do, but here's the point: if you've updated the Headers Security Advanced & HSTS WP plugin last time, you've seen that when we suggest doing so, we don't just say it and leave it at that. Well, with this 5.0.25 version we've added and fixed a lot (we got rid of some bugs, tidied up some pesky pixels and updated the graphics) and it all works great. Are we agreed? Touch "update" and we'll provide you with the most beautiful, fastest, and most impressive plugin around. Enjoy!
- Fixed: problem with Google's Federated Learning of Cohorts (FLoC) features.
- Fixed: problem after topic received for lack of Cross-Origin-Opener-Policy-Report-Only.

= 5.0.24 =
We don't want to tell you what to do, but here's the point: if you've updated the Headers Security Advanced & HSTS WP plugin last time, you've seen that when we suggest doing so, we don't just say it and leave it at that. Well, with this 5.0.24 version we've added and fixed a lot (we got rid of some bugs, tidied up some pesky pixels and updated the graphics) and it all works great. Are we agreed? Touch "update" and we'll provide you with the most beautiful, fastest, and most impressive plugin around. Enjoy!
- Delete: Removed the Access-Control-Allow-Origin header to mitigate potential security risks associated with it.
- Delete: After reevaluation, the PUT and DELETE methods were removed from the default configuration for security reasons.
- New: Under development an advanced customization option for values allowed in the Access-Control-Allow-Methods header in future updates.
- Minor updates and bug fixes.

= 5.0.23 =
We don't want to tell you what to do, but here's the point: if you've updated the Headers Security Advanced & HSTS WP plugin last time, you've seen that when we suggest doing so, we don't just say it and leave it at that. Well, with this 5.0.23 version we've added and fixed a lot (we got rid of some bugs, tidied up some pesky pixels and updated the graphics) and it all works great. Are we agreed? Touch "update" and we'll provide you with the most beautiful, fastest, and most impressive plugin around. Enjoy!
- Fixed: fixed fatal error with verision 5.0.22 with version 5.0.23.

= 5.0.22 =
We don't want to tell you what to do, but here's the point: if you've updated the Headers Security Advanced & HSTS WP plugin last time, you've seen that when we suggest doing so, we don't just say it and leave it at that. Well, with this 5.0.22 version we've added and fixed a lot (we got rid of some bugs, tidied up some pesky pixels and updated the graphics) and it all works great. Are we agreed? Touch "update" and we'll provide you with the most beautiful, fastest, and most impressive plugin around. Enjoy!
- Fixed: thanks to @erku's contribution, several changes were implemented to improve compliance with WordPress coding standards, leaving only a few exceptions necessary for the project to work optimally. Specifically, a PHPCS configuration file was added to handle coding rules and a properly structured composer.json file to handle dependencies. In addition, changes were made to the @alexclassroom translatable strings to improve the consistency and quality of translations within the application. These overall changes help improve code readability, facilitate future maintenance, and ensure better cross-language compatibility for users.
- Fixed: you could encounter errors with multisite and htaccess formatting.

= 5.0.21 =
We don't want to tell you what to do, but here's the point: if you've updated the Headers Security Advanced & HSTS WP plugin last time, you've seen that when we suggest doing so, we don't just say it and leave it at that. Well, with this 5.0.21 version we've added and fixed a lot (we got rid of some bugs, tidied up some pesky pixels and updated the graphics) and it all works great. But it's not all! We've also added a brand new and improved interface with a modern design to make your experience even more enjoyable. Are you ready for a new HSTS values customization experience? Do it in style! With the modern and functional interface, you can now customize your HSTS values like a true stylupator! Are we agreed? Touch "update" and we'll provide you with the most beautiful, fastest, and most impressive plugin around. Enjoy!
- Fixed: New logic has been implemented for the plugin in the different languages.
- Fixed: A problem was sistamo that could cause on some browsers the error with the header "Permissions-Policy" and the value "document-domain".

= 5.0.20 =
We don't want to tell you what to do, but here's the point: if you've updated the Headers Security Advanced & HSTS WP plugin last time, you've seen that when we suggest doing so, we don't just say it and leave it at that. Well, with this 5.0.20 version we've added and fixed a lot (we got rid of some bugs, tidied up some pesky pixels and updated the graphics) and it all works great. But it's not all! We've also added a brand new and improved interface with a modern design to make your experience even more enjoyable. Are you ready for a new HSTS values customization experience? Do it in style! With the modern and functional interface, you can now customize your HSTS values like a true stylupator! Are we agreed? Touch "update" and we'll provide you with the most beautiful, fastest, and most impressive plugin around. Enjoy!
- Fixed: solved problem with "best practices" on Lighthouse and Google Insight.
- Fixed: A problem could occur with the concatenation of an object of type string.
- Error Fixed: The plugin generated 237 characters with unexpected output during activation. If you notice "headers already sent" notes, problems with syndication feeds, or other issues, try disabling or removing this plugin.

= 5.0.19 =
We don't want to tell you what to do, but here's the point: if you've updated the Headers Security Advanced & HSTS WP plugin last time, you've seen that when we suggest doing so, we don't just say it and leave it at that. Well, with this 5.0.19 version we've added and fixed a lot (we got rid of some bugs, tidied up some pesky pixels and updated the graphics) and it all works great. But it's not all! We've also added a brand new and improved interface with a modern design to make your experience even more enjoyable. Are you ready for a new HSTS values customization experience? Do it in style! With the modern and functional interface, you can now customize your HSTS values like a true stylupator! Are we agreed? Touch "update" and we'll provide you with the most beautiful, fastest, and most impressive plugin around. Enjoy!
- Fixed: Updated and tested some answers for HSTS preload.
- Fixed: Issue that caused a problem with the CSS selector.
- Fixed: A problem could occur with the concatenation of an object of type string.
- Error Fixed: The plugin generated 237 characters with unexpected output during activation. If you notice "headers already sent" notes, problems with syndication feeds, or other issues, try disabling or removing this plugin.

= 5.0.18 =
We don't want to tell you what to do, but here's the point: if you've updated the Headers Security Advanced & HSTS WP plugin last time, you've seen that when we suggest doing so, we don't just say it and leave it at that. Well, with this 5.0.18 version we've added and fixed a lot (we got rid of some bugs, tidied up some pesky pixels and updated the graphics) and it all works great. But it's not all! We've also added a brand new and improved interface with a modern design to make your experience even more enjoyable. Are you ready for a new HSTS values customization experience? Do it in style! With the modern and functional interface, you can now customize your HSTS values like a true stylupator! Are we agreed? Touch "update" and we'll provide you with the most beautiful, fastest, and most impressive plugin around. Enjoy!
- Fixed: Updated and tested some answers for HSTS preload.
- Update: Donation button (PayPal) has been made independent, this no longer uses fonts by Google.
- Fixed: Issue that caused a problem with the CSS selector.
- Error Fixed: The plugin generated 237 characters with unexpected output during activation. If you notice "headers already sent" notes, problems with syndication feeds, or other issues, try disabling or removing this plugin.

= 5.0.17 =
We don't want to tell you what to do, but here's the point: if you've updated the Headers Security Advanced & HSTS WP plugin last time, you've seen that when we suggest doing so, we don't just say it and leave it at that. Well, with this 5.0.16 version we've added and fixed a lot (we got rid of some bugs, tidied up some pesky pixels and updated the graphics) and it all works great. But it's not all! We've also added a brand new and improved interface with a modern design to make your experience even more enjoyable. Are you ready for a new HSTS values customization experience? Do it in style! With the modern and functional interface, you can now customize your HSTS values like a true stylupator! Are we agreed? Touch "update" and we'll provide you with the most beautiful, fastest, and most impressive plugin around. Enjoy!
- New: added page to customize HSTS header values (max-age, includeSubDomains and Preload).
- New: Beta: We implemented a survey to listen to all users and implement new customization features in the plugin.
- Fixed: Donation button (BuyMeCoffee) has been made independent, this no longer uses fonts by Google.
- Fixed: Updated and tested some answers for HSTS preload.
- Update: Donation button (PayPal) has been made independent, this no longer uses fonts by Google.
- Update: After some testing, the header was implemented to force requests to one's domain at https://.
- Update: Issue that caused the Plugin blocking social access to be blocked. 
- Error Fixed: The plugin generated 237 characters with unexpected output during activation. If you notice "headers already sent" notes, problems with syndication feeds, or other issues, try disabling or removing this plugin.

= 5.0.16 =
We don't want to tell you what to do, but here's the point: if you've updated the Headers Security Advanced & HSTS WP plugin last time, you've seen that when we suggest doing so, we don't just say it and leave it at that. Well, with this 5.0.16 version we've added and fixed a lot (we got rid of some bugs, tidied up some pesky pixels and updated the graphics) and it all works great. But it's not all! We've also added a brand new and improved interface with a modern design to make your experience even more enjoyable. Are you ready for a new HSTS values customization experience? Do it in style! With the modern and functional interface, you can now customize your HSTS values like a true stylupator! Are we agreed? Touch "update" and we'll provide you with the most beautiful, fastest, and most impressive plugin around. Enjoy!
- New: added page to customize HSTS header values (max-age, includeSubDomains and Preload).
- New: Beta: We implemented a survey to listen to all users and implement new customization features in the plugin.
- Fixed: Donation button (BuyMeCoffee) has been made independent, this no longer uses fonts by Google.
- Fixed: Updated and tested some answers for HSTS preload.
- Update: Donation button (PayPal) has been made independent, this no longer uses fonts by Google.
- Update: After some testing, the header was implemented to force requests to one's domain at https://.
- Update: Issue that caused the Plugin blocking social access to be blocked. 

= 5.0.14 =
We don't want to tell you what to do, but here's the thing: if you updated the Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, with this version 5.0.14 we have added and fixed a lot of things (we got rid of some bugs, fixed some annoying pixels, and refreshed the graphics) and everything works great. Do we agree? Tap "update" and we will give you the best-looking, fastest and most impressive plugin around with the best updates in the world. Enjoy
- New: Donation button (PayPal) has been made independent, this no longer uses fonts by Google.
- New: After some testing, the header was implemented to force requests to one's domain at https://.
- Fixed: Donation button (BuyMeCoffee) has been made independent, this no longer uses fonts by Google.
- Fixed: Updated and tested some answers for HSTS preload.
- Update: Issue that caused the Plugin blocking social access to be blocked. 

= 5.0.13 =
We don't want to tell you what to do, but here's the thing: if you updated the Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, with this version 5.0.13 we have added and fixed a lot of things (we got rid of some bugs, fixed some annoying pixels, and refreshed the graphics) and everything works great. Do we agree? Tap "update" and we will give you the best-looking, fastest and most impressive plugin around with the best updates in the world. Enjoy
- Update: There could have been problems with accessing the url /wp-admin and causing a 502 error, we found the annoying bug and now everything should work great.
- Update: Donation button (Buy Me Coffee) has been made independent, this no longer uses fonts by Google.
- Fixed: Updated and tested some answers for HSTS preload.
- Fixed: Issue that caused the Plugin blocking social access to be blocked. 

= 5.0.10 =
ho ho ho merry christmas! We don't want to tell you what to do, but here's the thing: if you updated the Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, with this version 5.0.10 we have added and fixed a lot of things (we got rid of some bugs, fixed some annoying pixels, and refreshed the graphics) and everything works great. Do we agree? Tap "update" and we will give you the best-looking, fastest and most impressive plugin around with the best updates in the world. Enjoy
- Fixed: There could have been problems with accessing the url /wp-admin and causing a 502 error, we found the annoying bug and now everything should work great.
- Fixed: Donation button (Buy Me Coffee) has been made independent, this no longer uses fonts by Google.
- Fidex: Exterminated difficult Bugs and optimized loading speed and code optimization.
- Update: updated and tested some answers for HSTS preload.
- Update: Expect-CT functionality has been removed because it is no longer recommended. Although some browsers may still support it, I decided to avoid using it and changed the existing code; 
- New: Added instructions on how to perform cache clearing with the CloudFlare service.
- New: Compatibility with Wordpress 6.1.1 has been updated. 

= 5.0.06 =
We don't want to tell you what to do, but here's the thing: if you updated Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 5.0.06 (we've exterminated some bugs, fixed some annoying pixels and refreshed the graphics) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Enjoy
- Fixed: There could have been problems with accessing the url /wp-admin and causing a 502 error, we found the annoying bug and now everything should work great.

= 5.0.05 =
We don't want to tell you what to do, but here's the thing: if you updated Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 5.0.05 (we've exterminated some bugs, fixed some annoying pixels and refreshed the graphics) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Enjoy
- Fixed: After receiving two topics on the 502 issue, we fixed the problem that could occur on a restricted user.

= 5.0.04 =
We don't want to tell you what to do, but here's the thing: if you updated Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 5.0.04 (we've exterminated some bugs, fixed some annoying pixels and refreshed the graphics) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Enjoy
- New: new header security directives test final test (Permissions-Policy).

= 5.0.03 =
We don't want to tell you what to do, but here's the thing: if you updated Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 5.0.03 (we've exterminated some bugs, fixed some annoying pixels and refreshed the graphics) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Enjoy
- Update: some issues that could occur on some browsers and operating systems that implemented payment systems (Stripe, Paypal) have been resolved and fixed;
- New: new header security directives (Permissions-Policy) have been implemented and tested, here are some directives: new security directives for the header (Permissions-Policy) have been implemented and tested, here are some directives: accelerometer, ambient-light-sensor, autoplay, battery, camera, cross-origin-isolated, display-capture, document-domain, encrypted-media, execution-while-not-rendered, execution-while-out-of-viewport, fullscreen, geolocation, gyroscope, keyboard-map, magnetometer, microphone, midi=, navigation-override, payment, picture-in-picture, publickey-credentials-get, screen-wake-lock, sync-xhr, usb, web-share, xr-spatial-tracking, gamepad, conversion-measurement, focus-without-user-activation, serial, window-placement, vertical-scroll.

= 5.0.02 =
We don't want to tell you what to do, but here's the thing: if you updated Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 5.0.02 (we've exterminated some bugs, fixed some annoying pixels and refreshed the graphics) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Enjoy
- Fixed: We fixed a problem with "Parse error: syntax error" that could occur on some websites;
- Fixed: We fixed a problem with "Payment gateweay";
- Fixed: We fixed a problem with "Permissions-Policy" that could occur on some websites;

= 5.0.01 =
We don't want to tell you what to do, but here's the thing: if you updated Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 5.0.01 (we've exterminated some bugs, fixed some annoying pixels and refreshed the graphics) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Enjoy
- Fixed: issue with using gateweay of stripe payments (in praticular the use of external layers like checkout.stripe.com);
- Fixed: issue with the use of some stric-dynamic directives that could cause a warning to be displayed in the DOM;
- Update: Fixed eliminated annoying bugs and we are ready to reduce the weight of the plugin by 18%;
- Update: Compatibility with Cloudflare CDN Alternatives, Fastly Deliver, Akamai CDN, CloudFront CDN, Google Cloud CDN, Microsoft Azure CDN , Tata Communications CDN, StackPath CDN.

= 4.8.98 =
We don't want to tell you what to do, but here's the thing: if you updated Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 4.8.98 (we've exterminated some bugs, fixed some annoying pixels and refreshed the graphics) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Enjoy
- Fixed: We fixed and used the strict-origin-when-cross-origin referrer policy setting. This header retains much of the usefulness of the referrer, mitigating the risk of data leakage between cross-origins.

= 4.8.96 =
We don't want to tell you what to do, but here's the thing: if you updated Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 4.8.96 (we've exterminated some bugs, fixed some annoying pixels and refreshed the graphics) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Enjoy
- Fixed: Fixed issue that could show in own console log an error of (syntax error);
- Upgrade: Speeded up loading and compatibility with some third-party plugins;
- Upgrade: Updated some optimization functions of Wordpress version 6.0;

= 4.8.94 =
We don't want to tell you what to do, but here's the thing: if you updated Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 4.8.94 (we've exterminated some bugs, fixed some annoying pixels and refreshed the graphics) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Enjoy
- Update: optimization and resolution external application compatibility;
- Fixed: solved problem with some headers and debug optimizations;

= 4.8.93 =
We don't want to tell you what to do, but here's the thing: if you updated Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 4.8.93 (we've exterminated some bugs, fixed some annoying pixels and refreshed the graphics) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Enjoy
- Fixed: optimization and resolution external application compatibility;
- Fixed: solved problem with some headers and debug optimizations;
- Update: We fixed some issues that could occur with the "full screen" method;

= 4.8.92 =
We don't want to tell you what to do, but here's the thing: if you updated Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 4.8.90 (we've exterminated some bugs, fixed some annoying pixels and refreshed the graphics) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Enjoy
- Fixed: Compatibility with version 6.0 of Wordpress
- Fixed: redirection errors could occur ERR_TOO_MANY_REDIRECTS 

= 4.8.91 =
We don't want to tell you what to do, but here's the thing: if you updated Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 4.8.90 (we've exterminated some bugs, fixed some annoying pixels and refreshed the graphics) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Enjoy
- New: Compatibility with version 6.0 of Wordpress
- Update: We fixed some issues that could occur with the "full screen" method

= 4.8.90 =
We don't want to tell you what to do, but here's the thing: if you updated Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 4.8.90 (we've exterminated some bugs, fixed some annoying pixels and refreshed the graphics) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Enjoy
- New: compatibility Wordpress 6.0

= 4.8.89 =
We don't want to tell you what to do, but here's the thing: if you updated Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 4.8.89 (we've exterminated some bugs, fixed some annoying pixels and refreshed the graphics) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Enjoy
- Fixed: We fixed an issue that could occur with a renamed version of a header parameter, now we have optimized the request;

= 4.8.88 =
We don't want to tell you what to do, but here's the thing: if you updated Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 4.8.88 (we've exterminated some bugs, fixed some annoying pixels and refreshed the graphics) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Enjoy
- New: Added New X-Permitted-Cross-Domain-Policies;
- New: Optimization with the Serpworx tool (Check Your Security Headers);
- Add: Added new "Feature-Policies" such as: push=(), vibrate=(), fullscreen();
- Fixed: We fixed a problem with the debug.log file that could show the following warning (PHP Notice: Undefined index);

= 4.8.86 =
We don't want to tell you what to do, but here's the thing: if you updated Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 4.8.86 (we've exterminated some bugs, fixed some annoying pixels and refreshed the graphics) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Enjoy
- Fixed: We fixed a problem with the debug.log file that could show the following warning (PHP Notice: Undefined index);
- Fixed: fixed the problem with the wordpress widget, it could cause the wrong display of the favicon;

= 4.8.85 =
We don't want to tell you what to do, but here's the thing: if you updated Headers Security Advanced & HSTS WP plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 4.8.85 (we've exterminated some bugs, fixed some annoying pixels and refreshed the graphics) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Enjoy
- Fixed: We fixed a problem with the debug.log file that could show the following warning (PHP Notice: Undefined index);

= 4.8.6 =
We don't want to tell you what to do, but here's the thing: if you updated the plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 4.8.6 (we've improved some crazy programmer stuff) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Now let's get started right away to the next code and update to do 😀 we're crazy but we like this one
- Fixed: We have fixed an issue with the X-Frame-Options header;

= 4.8.3 =
We don't want to tell you what to do, but here's the thing: if you updated the plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 4.8.3 (we've improved some crazy programmer stuff) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Now let's get started right away to the next code and update to do 😀 we're crazy but we like this one
- Fixed: This is the latest version to fix and make compatible with themes, plugins that could create conflicts with Vimeo and Youtube implementation.

= 4.8.0 =
We don't want to tell you what to do, but here's the thing: if you updated the plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 4.8.0 (we've improved some crazy programmer stuff) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Now let's get started right away to the next code and update to do 😀 we're crazy but we like this one
- Fixed: We have fixed some issues with Vimeo viewing

= 4.7.30 =
We don't want to tell you what to do, but here's the thing: if you updated the plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 4.7.30 (we've improved some crazy programmer stuff) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Now let's get started right away to the next code and update to do 😀 we're crazy but we like this one
- Fixed: We found some bugs and now the plugin is more optimized and happy :-D 
- Fixed: We have fixed some issues with Vimeo viewing
- Update: Wordpress 5.9

= 4.7.20 =
We don't want to tell you what to do, but here's the thing: if you updated the plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this version 4.7.20 (we've improved some crazy programmer stuff) and everything works like a charm. So we're in agreement? Tap "update" and we'll give you the coolest, fastest and most awesome plugin out there with the best updates in the world. Now let's get started right away to the next code and update to do 😀 we're crazy but we like this one
- New: Wordpress 5.9
- Fixed: We've listened to your feedback and have momentarily disabled the ability to customize the url

= 4.7.15 =
We don’t want to tell you what to do, but here’s the thing: if you updated the plugin last time, you saw that when we propose to do it, we don’t just say it. Well, we’ve added and fixed a lot of things with this 4.7.15 version (we’ve improved some crazy programmer stuff) and everything works like a charm. So are we on board? Tap on “update” and we’ll give you the coolest, fastest, most awesome plugin out there with the best updates in the world. Now let’s get started right away to the next code and update to do 😀 we are crazy but we like this
* Fixed: we have solved the error that was shown in QueryMonitor Undefined property

= 4.7.1 =
We don’t want to tell you what to do, but here’s the thing: if you updated the plugin last time, you saw that when we propose to do it, we don’t just say it. Well, we’ve added and fixed a lot of things with this 4.7.1 version (we’ve improved some crazy programmer stuff) and everything works like a charm. So are we on board? Tap on “update” and we’ll give you the coolest, fastest, most awesome plugin out there with the best updates in the world. Now let’s get started right away to the next code and update to do 😀 we are crazy but we like this
* Fixed: "All the little beings that generated errors and bugs have been exterminated. We know we are very attentive to details"
* Update: "Third-party plugin optimization such as cache, cloudflare and redirects"

= 4.7.0 =
IMPORTANT: This update optimizes and fixes some issues that may occur with a cache manager.
We don't want to tell you what to do, but here's the thing: if you updated the plugin last time, you saw that when we propose to do it, we don't just say it. Well, we've added and fixed a lot of things with this 4.7.0 version (we've improved some crazy programmer stuff) and everything works like a charm. So are we on board? Tap on "update" and we'll give you the coolest, fastest, most awesome plugin out there with the best updates in the world. Now let's get started right away to the next code and update to do :D we are crazy but we like this
* Update: "X Powered By"
* Update: Content Security Policy optimization (CSP Header) and internal testing with Chrome, Firefox, Safari, Edge 
* Updated: "accelerometer block"
* Updated: "gyroscope block"
* Updated: "magnetometer block"
* Updated: "usb block"
