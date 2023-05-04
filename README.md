# DocKing from ShipSaaS

[![Build & Test (PHP 8.2)](https://github.com/shipsaas/docking/actions/workflows/build.yml/badge.svg)](https://github.com/shipsaas/docking/actions/workflows/build.yml)
[![Integration Tests](https://github.com/shipsaas/docking/actions/workflows/integration.yml/badge.svg)](https://github.com/shipsaas/docking/actions/workflows/integration.yml)
[![codecov](https://codecov.io/gh/shipsaas/docking/branch/main/graph/badge.svg?token=FAZ9899IPW)](https://codecov.io/gh/shipsaas/docking)

<p align="center" width="100%">
    <img src="https://raw.githubusercontent.com/shipsaas/docking/main/docs/img/logo.png"> 
</p>

DocKing is a document-management microservice. Deal with the templates & render them in PDF format just in 1 place.

You can use DocKing as a Shared-Microservice which can be used in any services.

Documentation: [DocKing](https://docking.shipsaas.tech)

## Features
- Manage your document templates 📰🧾.
- Render HTML based on your desired data for a specific template, then export it as PDF 🏃‍.
- Webhook notification after PDF rendered (for async flow) 🚀
- Built-in UI-console to manage the services (for internal use) 🔋.
- DocKing can perfectly fit for the horizontal scaling based on your needs 😉.

## Diagram of how it works

![DocKing](./docs/img/full-picture.png)

From the diagram above, DocKing is standing as a "shared-microservice".

- Billing Service can manage their bill templates and render the PDFs.
- Order Service can manage their order templates and render the PDFs.
- Contract Service can manage their contract templates and render the PDFs.
- ...

Awesome, IKR?

## DocKing uses
- PHP 8.2
- Laravel 10
- Any database (MySQL, PostgreSQL or SQLite - your choice)
  -  Personal preference: MySQL 8

### PDF Rendering Services
- Gotenberg ⭐️
- wkHTMLtoPDF ✅
- (Planned) mPDF
  - Waiting for `psr-*` updates

## Tests

- Unit Tests to cover all functions & methods ❇️
- Integration Tests to test against REAL PDF ENGINES:
  - Gotenberg ✅
  - WkHtmlToPdf ✅

## LICENSE

MIT LICENSE

## Contributors

ShipSaaS x Seth Phat & Contributors.
