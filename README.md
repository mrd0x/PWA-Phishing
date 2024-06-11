# Progressive Web App (PWA) Phishing

A PWA Phishing template which was explained here: [https://mrd0x.com/progressive-web-apps-pwa-phishing](https://mrd0x.com/progressive-web-apps-pwa-phishing).

## Attack Scenario

A user lands on `index.html` and clicks the "Install Microsoft Application" button. The install app prompt appears and once it is installed by the user, the JavaScript embedded in `index.html` redirects the PWA window to the phishing page that hase a fake URL bar at the top (i.e. `mrd0x.html`). Ensure that you're testing this over HTTPS to avoid encountering issues.

## Demo

![Demo](https://github.com/mrd0x/PWA-Phishing/blob/main/demo.gif)

## Files

* `index.html` - Landing page that has an "Install Microsoft Application" button.

* `manifset.json` - The PWA manifest file.

* `service-worker.js` - The PWA service worker.

* `mrd0x.html` - This is a sample Microsoft phishing page that has a fake URL bar at the top of the page.

* `styles.css` - CSS stylesheet.

* `submit.php` - Simple PHP file that logs the credentials entered on the Microsoft phishing page.

## Usage

This repository is simply to demonstrate how PWA phishing works. Don't use it for illegal purposes.
