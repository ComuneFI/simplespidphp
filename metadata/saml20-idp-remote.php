<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote 
 */
/*
 * Guest IdP. allows users to sign up and register. Great for testing!
 */
/* $metadata['https://openidp.feide.no'] = array(
  'name' => array(
  'en' => 'Feide OpenIdP - guest users',
  'no' => 'Feide Gjestebrukere',
  ),
  'description'          => 'Here you can login with your account on Feide RnD OpenID. If you do not already have an account on this identity provider, you can create a new one by following the create new account link and follow the instructions.',

  'SingleSignOnService'  => 'https://openidp.feide.no/simplesaml/saml2/idp/SSOService.php',
  'SingleLogoutService'  => 'https://openidp.feide.no/simplesaml/saml2/idp/SingleLogoutService.php',
  'certFingerprint'      => 'c9ed4dfb07caf13fc21e0fec1572047eb8a7a4cb'
  ); */

/*INFOCERT*/
/*TEST*/
$metadata['https://identitycl.infocert.it'] = array (
  'entityid' => 'https://identitycl.infocert.it',
  'description' => 
  array (
    'it' => 'InfoCert S.p.A. IDP DI TEST',
    'en' => 'InfoCert S.p.A. IDP DI TEST',
    'fr' => 'InfoCert S.p.A. IDP DI TEST',
    'de' => 'InfoCert S.p.A. IDP DI TEST',
  ),
  'OrganizationName' => 
  array (
    'it' => 'InfoCert S.p.A. IDP DI TEST',
    'en' => 'InfoCert S.p.A. IDP DI TEST',
    'fr' => 'InfoCert S.p.A. IDP DI TEST',
    'de' => 'InfoCert S.p.A. IDP DI TEST',
  ),
  'name' => 
  array (
    'it' => 'InfoCert S.p.A. IDP DI TEST',
    'en' => 'InfoCert S.p.A. IDP DI TEST',
    'fr' => 'InfoCert S.p.A. IDP DI TEST',
    'de' => 'InfoCert S.p.A. IDP DI TEST',
  ),
  'OrganizationDisplayName' => 
  array (
    'it' => 'InfoCert S.p.A. IDP DI TEST',
    'en' => 'InfoCert S.p.A. IDP DI TEST',
    'fr' => 'InfoCert S.p.A. IDP DI TEST',
    'de' => 'InfoCert S.p.A. IDP DI TEST',
  ),
  'url' => 
  array (
    'it' => 'https://www.infocert.it',
    'en' => 'https://www.infocert.it/international/?lang=en',
    'fr' => 'https://www.infocert.it/international/?lang=fr',
    'de' => 'https://www.infocert.it/international/?lang=de',
  ),
  'OrganizationURL' => 
  array (
    'it' => 'https://www.infocert.it',
    'en' => 'https://www.infocert.it/international/?lang=en',
    'fr' => 'https://www.infocert.it/international/?lang=fr',
    'de' => 'https://www.infocert.it/international/?lang=de',
  ),
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'sign.authnrequest' => true,
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://identitycl.infocert.it/spid/samlsso',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://identitycl.infocert.it/spid/samlsso',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://identitycl.infocert.it/spid/samlslo',
      'ResponseLocation' => 'https://identitycl.infocert.it/spid/samlslo/response',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://identitycl.infocert.it/spid/samlslo',
      'ResponseLocation' => 'https://identitycl.infocert.it/spid/samlslo/response',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => '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',
    ),
  ),
);
/*PROD*/
$metadata['https://identity.infocert.it'] = array (
  'entityid' => 'https://identity.infocert.it',
  'description' => 
  array (
    'it' => 'InfoCert S.p.A.',
    'en' => 'InfoCert S.p.A.',
    'fr' => 'InfoCert S.p.A.',
    'de' => 'InfoCert S.p.A.',
  ),
  'OrganizationName' => 
  array (
    'it' => 'InfoCert S.p.A.',
    'en' => 'InfoCert S.p.A.',
    'fr' => 'InfoCert S.p.A.',
    'de' => 'InfoCert S.p.A.',
  ),
  'name' => 
  array (
    'it' => 'InfoCert S.p.A.',
    'en' => 'InfoCert S.p.A.',
    'fr' => 'InfoCert S.p.A.',
    'de' => 'InfoCert S.p.A.',
  ),
  'OrganizationDisplayName' => 
  array (
    'it' => 'InfoCert S.p.A.',
    'en' => 'InfoCert S.p.A.',
    'fr' => 'InfoCert S.p.A.',
    'de' => 'InfoCert S.p.A.',
  ),
  'url' => 
  array (
    'it' => 'https://www.infocert.it',
    'en' => 'https://www.infocert.it/international/?lang=en',
    'fr' => 'https://www.infocert.it/international/?lang=fr',
    'de' => 'https://www.infocert.it/international/?lang=de',
  ),
  'OrganizationURL' => 
  array (
    'it' => 'https://www.infocert.it',
    'en' => 'https://www.infocert.it/international/?lang=en',
    'fr' => 'https://www.infocert.it/international/?lang=fr',
    'de' => 'https://www.infocert.it/international/?lang=de',
  ),
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'sign.authnrequest' => true,
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://identity.infocert.it/spid/samlsso',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://identity.infocert.it/spid/samlsso',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://identity.infocert.it/spid/samlslo',
      'ResponseLocation' => 'https://identity.infocert.it/spid/samlslo/response',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://identity.infocert.it/spid/samlslo',
      'ResponseLocation' => 'https://identity.infocert.it/spid/samlslo/response',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => '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',
    ),
  ),
);

/*FINE INFOCERT PROD*/

/*TIM*/
/*TEST*/
$metadata['https://login.idcoll.tim.it/affwebservices/public/saml2sso'] = array (
  'entityid' => 'https://login.idcoll.tim.it/affwebservices/public/saml2sso',
  'description' => 
  array (
    'en' => 'TI Trust Technologies srl  IDP DI TEST',
  ),
  'OrganizationName' => 
  array (
    'en' => 'TI Trust Technologies srl IDP DI TEST',
  ),
  'name' => 
  array (
    'en' => 'Trust Technologies srl IDP DI TEST',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'Trust Technologies srl IDP DI TEST',
  ),
  'url' => 
  array (
    'en' => 'https://www.trusttechnologies.it IDP DI TEST',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'https://www.trusttechnologies.it IDP DI TEST',
  ),
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'sign.authnrequest' => true,
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://login.idcoll.tim.it/affwebservices/public/saml2sso',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://login.idcoll.tim.it/affwebservices/public/saml2sso',
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIEMzCCAxugAwIBAgIJALYnjONXMMqhMA0GCSqGSIb3DQEBCwUAMIGvMQswCQYDVQQGEwJJVDELMAkGA1UECAwCUk0xEDAOBgNVBAcMB1BvbWV6aWExLjAsBgNVBAoMJVRlbGVjb20gSXRhbGlhIFRydXN0IFRlY2hub2xvZ2llcyBzcmwxLTArBgNVBAsMJFNlcnZpemkgcGVyIGwnaWRlbnRpdGEgZGlnaXRhbGUgQ09MTDEiMCAGA1UEAwwZVEkgVHJ1c3QgVGVjaG5vbG9naWVzIHNybDAeFw0xNTExMTgxMDM3MDVaFw0xNzExMTcxMDM3MDVaMIGvMQswCQYDVQQGEwJJVDELMAkGA1UECAwCUk0xEDAOBgNVBAcMB1BvbWV6aWExLjAsBgNVBAoMJVRlbGVjb20gSXRhbGlhIFRydXN0IFRlY2hub2xvZ2llcyBzcmwxLTArBgNVBAsMJFNlcnZpemkgcGVyIGwnaWRlbnRpdGEgZGlnaXRhbGUgQ09MTDEiMCAGA1UEAwwZVEkgVHJ1c3QgVGVjaG5vbG9naWVzIHNybDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBALps9l10xvpHfRo7BJaemptHOl+EoAy//Y/NFzoLQYk4HuIw7hhfdkOEV9mVfUDfq9odvgUtvmFDpIXoiAKo9vkG/sjR8iGlnj+gTi4xjnfGf1IRshP8cXhyK/65GH6KyxcAI18GMGwq9XEpO91akVJGaxm2a5wshrFIaRGAqpQRN9+ZXu7sUVWu/8noizUGenbULRU2k4OqHji57zi32e11tK4nXO9buwNUgHTDtQd7s8z1AxMXH7MRF6yRx1+AkGXGtvckc9+PQ8xyaxs1OtE/CKrN+OdPs2HRQ7ik1fpTz4SvFnReH/+lbdW84ff4g238JOGiqZ8JYpAk7Utnhe0CAwEAAaNQME4wHQYDVR0OBBYEFHaE7d41rySTbypGFC2POSyo9guLMB8GA1UdIwQYMBaAFHaE7d41rySTbypGFC2POSyo9guLMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBAKOFXkkMSMmCF68/NYcQ/ki0F2TKxetpUZEtTsYAoP3kap4wGDrsu+qNgyTJcMB91rfF6uZ2Zd20N3MXgd8+MFsjMIjBo5nRAO8rSl79t0Nlva1WyqYgZbTSJjw24AXBIjLF7vw1ZVRMAv1/D1ehxDHXF7mOnQ0UiysED8DeohULZJyPO/bFcCPHI9LSNtJL6bW8pDIJR7Fc0M6FkF7CTTgbtNpgPU7P8iCcUL97BCe9alTJ0wApI1XU2/EG5Dz5w33ZpOOx6c8r1O1XglCiUqwuqiQNqqL1sFW7uCg0Q7KQzmwLy1ZCOh0o3uPIxQZDW2oRYX18I++G7aGQoGJ+mfs=',
    ),
  ),
);
/*PROD*/
/*INIZIO TIM PROD*/
$metadata['https://login.id.tim.it/affwebservices/public/saml2sso'] = array (
  'entityid' => 'https://login.id.tim.it/affwebservices/public/saml2sso',
  'description' => 
  array (
    'en' => 'TI Trust Technologies srl',
  ),
  'OrganizationName' => 
  array (
    'en' => 'TI Trust Technologies srl',
  ),
  'name' => 
  array (
    'en' => 'Trust Technologies srl',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'Trust Technologies srl',
  ),
  'url' => 
  array (
    'en' => 'https://www.trusttechnologies.it',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'https://www.trusttechnologies.it',
  ),
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'sign.authnrequest' => true,
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://login.id.tim.it/affwebservices/public/saml2sso',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://login.id.tim.it/affwebservices/public/saml2sso',
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIE7jCCA9agAwIBAgIJAIfOQuFIcYGRMA0GCSqGSIb3DQEBCwUAMIGqMQswCQYDVQQGEwJJVDEL
MAkGA1UECBMCUk0xEDAOBgNVBAcTB1BvbWV6aWExLjAsBgNVBAoTJVRlbGVjb20gSXRhbGlhIFRy
dXN0IFRlY2hub2xvZ2llcyBzcmwxKDAmBgNVBAsTH1NlcnZpemkgcGVyIGwnaWRlbnRpdGEgZGln
aXRhbGUxIjAgBgNVBAMTGVRJIFRydXN0IFRlY2hub2xvZ2llcyBzcmwwHhcNMTYwMTE4MTAxODA2
WhcNMTgwMTE3MTAxODA2WjCBqjELMAkGA1UEBhMCSVQxCzAJBgNVBAgTAlJNMRAwDgYDVQQHEwdQ
b21lemlhMS4wLAYDVQQKEyVUZWxlY29tIEl0YWxpYSBUcnVzdCBUZWNobm9sb2dpZXMgc3JsMSgw
JgYDVQQLEx9TZXJ2aXppIHBlciBsJ2lkZW50aXRhIGRpZ2l0YWxlMSIwIAYDVQQDExlUSSBUcnVz
dCBUZWNobm9sb2dpZXMgc3JsMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0mvyKfdJ
p0YgK7KAdD+sVcVpHcZoBBBFcz0cg8PPdT+2nH0ES09uxHWghcHNg0nJGWPJKaUJ0PWdokKwQ+ah
I7RiHI9zufN4G7LlM40ko7heI5Xjv4wCMeJNYM2GY+1l9fS+595882GopALi8MGhTxH3QFvPTDtx
j7D0fsKw0DNFk18jcRoLwfc/X0fzyUMBDk6QaZzi5MTjKP5ouHn/CATkW7MRZZOy6CGb6Fic0HyO
hB46eFnB2QlRnCzQe1cwzpnfzB/BbtouWe/CFlHtbACbZwXGRKfFJnr3Zj5eYi5aRZDteIXMAj/U
mNTP0X0PcI66b5ialTeDXFjgEO1hhwIDAQABo4IBEzCCAQ8wHQYDVR0OBBYEFIqo1nunRisDzjvL
kTZx2/VVmXPjMIHfBgNVHSMEgdcwgdSAFIqo1nunRisDzjvLkTZx2/VVmXPjoYGwpIGtMIGqMQsw
CQYDVQQGEwJJVDELMAkGA1UECBMCUk0xEDAOBgNVBAcTB1BvbWV6aWExLjAsBgNVBAoTJVRlbGVj
b20gSXRhbGlhIFRydXN0IFRlY2hub2xvZ2llcyBzcmwxKDAmBgNVBAsTH1NlcnZpemkgcGVyIGwn
aWRlbnRpdGEgZGlnaXRhbGUxIjAgBgNVBAMTGVRJIFRydXN0IFRlY2hub2xvZ2llcyBzcmyCCQCH
zkLhSHGBkTAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBAQBkgBFZDg34+ER3HaFSmg5I
7BUkjyPinMqy1G2k5O2Jlry/e6X8u8QhieKXhMtGq3+XzYHY/QEFmnqOvEdlCeET9PPVb0Mr0mG5
vU7lb2MfB+2+Wqg+1Hf8c3ABfDItuJoL95OsbEO4a+3a6EMfaAdSaeTb2+rsfr6R12cSxQcx1643
0iMhGj4T9GpFp8XH/JSE5XJvIddpNxuzf+/LlbcsMJ5lljitlOYUi7MxLpiqtgl56UD1YkGcezoi
2Glb3m3l3a2V4pShh6qROfyd87jLCjqsuBJtlgToSQgMTb4lFv9RBbFD3rjL8gCx55W6kxP1Yecl
FVPzk/7Xaca29uTJ',
    ),
  ),
);

/*FINE TIM PROD*/

/*POSTE*/
/*TEST*/
$metadata['https://spidposte.test.poste.it'] = array (
  'entityid' => 'https://spidposte.test.poste.it',
  'description' => 
  array (
    'it' => 'Poste Italiane SpA IDP DI TEST',
  ),
  'OrganizationName' => 
  array (
    'it' => 'Poste Italiane SpA IDP DI TEST',
  ),
  'name' => 
  array (
    'it' => 'Poste Italiane SpA IDP DI TEST',
  ),
  'OrganizationDisplayName' => 
  array (
    'it' => 'Poste Italiane SpA IDP DI TEST',
  ),
  'url' => 
  array (
    'it' => 'https://spidposte.test.poste.it',
  ),
  'OrganizationURL' => 
  array (
    'it' => 'https://spidposte.test.poste.it',
  ),
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'sign.authnrequest' => true,
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://spidposte.test.poste.it/jod-fs/ssoservicepost',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://spidposte.test.poste.it/jod-fs/ssoserviceredirect',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://spidposte.test.poste.it/jod-fs/sloservicepost',
      'ResponseLocation' => 'https://spidposte.test.poste.it/jod-fs/sloserviceresponsepost',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://spidposte.test.poste.it/jod-fs/sloserviceredirect',
      'ResponseLocation' => 'https://spidposte.test.poste.it/jod-fs/sloserviceresponseredirect',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIFSDCCBDCgAwIBAgIVAOpzjrxo3HDlXq9WZ+FtSh3Rgf39MA0GCSqGSIb3DQEBCwUAMG8xCzAJ
BgNVBAYTAklUMQswCQYDVQQIDAJJVDEYMBYGA1UECgwPUG9zdGVjb20gUy5wLkEuMSIwIAYDVQQL
DBlTZXJ2aXppIGRpIENlcnRpZmljYXppb25lMRUwEwYDVQQDDAxQb3N0ZWNvbSBDUzMwHhcNMTYw
MTA4MTY1NTUwWhcNMTcwMTA4MTY1NTUwWjBvMQswCQYDVQQGEwJJVDEeMBwGA1UECgwVUG9zdGUg
SXRhbGlhbmUgUy5wLkEuMR4wHAYDVQQLDBVQb3N0ZSBJdGFsaWFuZSBTLnAuQS4xIDAeBgNVBAMM
F3NwaWRwb3N0ZS50ZXN0LnBvc3RlLml0MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA
n5rHqOHIO3kREm8G9mN4rGJYBylIXqDWmvYT9yHLe+rAb0AgQIs7NPOSbrpYMqu3tFE32qJ4bggH
7evN8MREtcpGH8IkH9SVFhZI6jgJHO2bb+k++FtP/rXmdW1b/mr9FJvdv06P0FlAPD2ckejIw3MT
+be3mxh4iuJATbpiyj1iOs6XMNksnai2NvimurzHNNy4KofT7twjrUAN1EOqAAmjDra73dLijCQU
JOFj2zZ34jMI4yMRogqviYdIBYGSzVJuRHuQxUMURvd8m3IKXQMbOBQ9DsP9WYFlhvLfNNmOUI0G
MGT7vGDxpBCDBQr8ifjhuG2mUMj4lJiuOHZZ+wIDAQABo4IB2TCCAdUwTwYDVR0gBEgwRjBEBgcr
TAsBAQQBMDkwNwYIKwYBBQUHAgEWK2h0dHA6Ly9wb3N0ZWNlcnQucG9zdGUuaXQvbWFudWFsaW9w
ZXJhdGl2aS8wDAYDVR0TAQH/BAIwADAiBgNVHREEGzAZghdzcGlkcG9zdGUudGVzdC5wb3N0ZS5p
dDA6BggrBgEFBQcBAQQuMCwwKgYIKwYBBQUHMAGGHmh0dHA6Ly9wb3N0ZWNlcnQucG9zdGUuaXQv
b2NzcDAOBgNVHQ8BAf8EBAMCA7gwHQYDVR0lBBYwFAYIKwYBBQUHAwIGCCsGAQUFBwMBMIGFBgNV
HSMEfjB8gBSP3JfH1FSPRSzsHSJf+9DPBv//kKFepFwwWjELMAkGA1UEBhMCSUUxEjAQBgNVBAoT
CUJhbHRpbW9yZTETMBEGA1UECxMKQ3liZXJUcnVzdDEiMCAGA1UEAxMZQmFsdGltb3JlIEN5YmVy
VHJ1c3QgUm9vdIIEBydSYjA+BgNVHR8ENzA1MDOgMaAvhi1odHRwOi8vcG9zdGVjZXJ0LnBvc3Rl
Lml0L3Bvc3RlY29tY3MzL2NybC5jcmwwHQYDVR0OBBYEFLXZ6bcweYaOOFs0igol3Et9RH+3MA0G
CSqGSIb3DQEBCwUAA4IBAQAC5HAmFqleUsdu4BCRYvLAoawEpKdJepwextALNUXFFtCfkDQLix5j
xWeHOJrNgyA+4Wsvk30yYzIXzvX6jXFLPOIljX+ut+AHuwHHh/aLYa6TILRBL2t3UYKie/Se5iXq
zfpLrb03L9x/fYSJ0RcsxqHEifd9cqVjOQmt2biOfgcu/gmFDiydvCmLoHVqRcXLk8Yjkfq0Behw
kGruo4PqU3UQCLwSWxww4WnAgK5Tz/++Q7n7JRoznRXuTAI0TDq2PJrFIPQXnuSSNsP0h/qJSB2Q
FIOlmjL/5F5Vcc0pt3C4RYFPAu4gqYBQ4nfr0JTZ1/70LzM539Vo/5nKw4Sf',
    ),
  ),
);

/*INIZIO POSTE PROD*/
$metadata['https://posteid.poste.it'] = array (
  'entityid' => 'https://posteid.poste.it',
  'description' => 
  array (
    'it' => 'Poste Italiane SpA',
  ),
  'OrganizationName' => 
  array (
    'it' => 'Poste Italiane SpA',
  ),
  'name' => 
  array (
    'it' => 'Poste Italiane SpA',
  ),
  'OrganizationDisplayName' => 
  array (
    'it' => 'Poste Italiane SpA',
  ),
  'url' => 
  array (
    'it' => 'http://www.poste.it',
  ),
  'OrganizationURL' => 
  array (
    'it' => 'http://www.poste.it',
  ),
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'sign.authnrequest' => true,
  
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://posteid.poste.it/jod-fs/ssoservicepost',
    ),
    1 => 
    array (
      'index' => 1,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://posteid.poste.it/jod-fs/ssoserviceredirect',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://posteid.poste.it/jod-fs/sloservicepost',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIEKzCCAxOgAwIBAgIDE2Y0MA0GCSqGSIb3DQEBCwUAMGAxCzAJBgNVBAYTAklUMRgwFgYDVQQK
                        DA9Qb3N0ZWNvbSBTLnAuQS4xIDAeBgNVBAsMF0NlcnRpZmljYXRpb24gQXV0aG9yaXR5MRUwEwYD
                        VQQDDAxQb3N0ZWNvbSBDQTMwHhcNMTYwMjI2MTU1MjQ0WhcNMjEwMjI2MTU1MjQ0WjBxMQswCQYD
                        VQQGEwJJVDEOMAwGA1UECAwFSXRhbHkxDTALBgNVBAcMBFJvbWUxHjAcBgNVBAoMFVBvc3RlIEl0
                        YWxpYW5lIFMucC5BLjENMAsGA1UECwwEU1BJRDEUMBIGA1UEAwwLSURQLVBvc3RlSUQwggEiMA0G
                        CSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDZFEtJoEHFAjpCaZcj5DVWrRDyaLZyu31XApslbo87
                        CyWz61OJMtw6QQU0MdCtrYbtSJ6vJwx7/6EUjsZ3u4x3EPLdlkyiGOqukPwATv4c7TVOUVs5onIq
                        TphM9b+AHRg4ehiMGesm/9d7RIaLuN79iPUvdLn6WP3idAfEw+rhJ/wYEQ0h1Xm5osNUgtWcBGav
                        ZIjLssWNrDDfJYxXH3QZ0kI6feEvLCJwgjXLGkBuhFehNhM4fhbX9iUCWwwkJ3JsP2++Rc/iTA0L
                        ZhiUsXNNq7gBcLAJ9UX2V1dWjTzBHevfHspzt4e0VgIIwbDRqsRtF8VUPSDYYbLoqwbLt18XAgMB
                        AAGjgdwwgdkwRgYDVR0gBD8wPTAwBgcrTAsBAgEBMCUwIwYIKwYBBQUHAgEWF2h0dHA6Ly93d3cu
                        cG9zdGVjZXJ0Lml0MAkGBytMCwEBCgIwDgYDVR0PAQH/BAQDAgSwMB8GA1UdIwQYMBaAFKc0XP2F
                        ByYU2l0gFzGKE8zVSzfmMD8GA1UdHwQ4MDYwNKAyoDCGLmh0dHA6Ly9wb3N0ZWNlcnQucG9zdGUu
                        aXQvcG9zdGVjb21jYTMvY3JsMy5jcmwwHQYDVR0OBBYEFEvrikZQkfBjuiTpxExSBe8wGgsyMA0G
                        CSqGSIb3DQEBCwUAA4IBAQBNAw8UoeiCF+1rFs27d3bEef6CLe/PJga9EfwKItjMDD9QzT/FShRW
                        KLHlK69MHL1ZLPRPvuWUTkIOHTpNqBPILvO1u13bSg+6o+2OdqAkCBkbTqbGjWSPLaTUVNV6MbXm
                        vttD8Vd9vIZg1xBBG3Fai13dwvSj3hAZd8ug8a8fW1y/iDbRC5D1O+HlHDuvIW4LbJ093jdj+oZw
                        Syd216gtXL00QA0C1uMuDv9Wf9IxniTb710dRSgIcM4/eR7832fZgdOsoalFzGYWxSCs8WOZrjpu
                        b1fdaRSEuCQk2+gmdsiRcTs9EqPCCNiNlrNAiWEyGtL8A4ao3pDMwCtrb2yr',
    ),
  ),
);

/*FINE POSTE PROD*/



/*INIZIO SIELTE PROD*/
$metadata['identity.sieltecloud.it'] = array (
  'entityid' => 'identity.sieltecloud.it',
  'description' => 
  array (
    'en' => 'Sielte S.p.A.',
    'it' => 'Sielte S.p.A.',
  ),
  'OrganizationName' => 
  array (
    'en' => 'Sielte S.p.A.',
    'it' => 'Sielte S.p.A.',
  ),
  'name' => 
  array (
    'en' => 'http://www.sielte.it',
    'it' => 'http://www.sielte.it',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'http://www.sielte.it',
    'it' => 'http://www.sielte.it',
  ),
  'url' => 
  array (
    'en' => 'http://www.sielte.it',
    'it' => 'http://www.sielte.it',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'http://www.sielte.it',
    'it' => 'http://www.sielte.it',
  ),
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'sign.authnrequest' => true,
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://identity.sieltecloud.it/simplesaml/saml2/idp/SSOService.php',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://identity.sieltecloud.it/simplesaml/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://identity.sieltecloud.it/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://identity.sieltecloud.it/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDczCCAlugAwIBAgIJAMsX0iEKQM6xMA0GCSqGSIb3DQEBCwUAMFAxCzAJBgNVBAYTAklUMQ4wDAYDVQQIDAVJdGFseTEgMB4GA1UEBwwXU2FuIEdyZWdvcmlvIGRpIENhdGFuaWExDzANBgNVBAoMBlNpZWx0ZTAeFw0xNTEyMTQwODE0MTVaFw0yNTEyMTMwODE0MTVaMFAxCzAJBgNVBAYTAklUMQ4wDAYDVQQIDAVJdGFseTEgMB4GA1UEBwwXU2FuIEdyZWdvcmlvIGRpIENhdGFuaWExDzANBgNVBAoMBlNpZWx0ZTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANIRlOjM/tS9V9jYjJreqZSctuYriLfPTDgX2XdhWEbMpMpwA9p0bsbLQoC1gP0piLO+qbCsIh9+boPfb4/dLIA7E+Vmm5/+evOtzvjfHG4oXjZK6jo08QwkVV8Bm1jkakJPVZ57QFbyDSr+uBbIMY7CjA2LdgnIIwKN/kSfFhrZUMJ6ZxwegM100X5psfNPSV9WUtgHsvqlIlvydPo2rMm21sg+2d3Vtg8DthNSYRLqgazCc0NTsigrH7niSbJCO0nq/svMX2rSFdh5GFK7/pxT+c3OFWqIR8r+RX4qW+auJqkbTuNRwxV22Sm6r69ZJwV0WspvsVJi+FYqiyoWhgUCAwEAAaNQME4wHQYDVR0OBBYEFCUx063GwUhEFDllwCBe/+jdeW+XMB8GA1UdIwQYMBaAFCUx063GwUhEFDllwCBe/+jdeW+XMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBADF94c3JwyBM86QBLeoUZxRYKPniba8B39FfJk0pb+LejKfZMvspOrOFgYQQ9UrS8IFkBX9Xr7/tjRbr2cPwZNjrEZhoq+NfcE09bnaWTyEl1IEKK8TWOupJj9UNVpYXX0LfIRrMwNEzAPQykOaqPOnyHxOCPTY957xXSo3jXOyvugtvPHbd+iliAzUoPm1tgiTKWS+EkQ/e22eFv5NEyT+oHiKovrQ+voPWOIvJVMjiTyxRic8fEnI9zzV0SxWvFvty77wgcYbeEuFZa3iidhojUge8o1uY/JUyQjFxcvvfAgWSIZwdHiNyWaAgwzLPmPCPsvBdR3xrlcDg/9Bd3D0=',
    ),
    1 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDczCCAlugAwIBAgIJAMsX0iEKQM6xMA0GCSqGSIb3DQEBCwUAMFAxCzAJBgNVBAYTAklUMQ4wDAYDVQQIDAVJdGFseTEgMB4GA1UEBwwXU2FuIEdyZWdvcmlvIGRpIENhdGFuaWExDzANBgNVBAoMBlNpZWx0ZTAeFw0xNTEyMTQwODE0MTVaFw0yNTEyMTMwODE0MTVaMFAxCzAJBgNVBAYTAklUMQ4wDAYDVQQIDAVJdGFseTEgMB4GA1UEBwwXU2FuIEdyZWdvcmlvIGRpIENhdGFuaWExDzANBgNVBAoMBlNpZWx0ZTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANIRlOjM/tS9V9jYjJreqZSctuYriLfPTDgX2XdhWEbMpMpwA9p0bsbLQoC1gP0piLO+qbCsIh9+boPfb4/dLIA7E+Vmm5/+evOtzvjfHG4oXjZK6jo08QwkVV8Bm1jkakJPVZ57QFbyDSr+uBbIMY7CjA2LdgnIIwKN/kSfFhrZUMJ6ZxwegM100X5psfNPSV9WUtgHsvqlIlvydPo2rMm21sg+2d3Vtg8DthNSYRLqgazCc0NTsigrH7niSbJCO0nq/svMX2rSFdh5GFK7/pxT+c3OFWqIR8r+RX4qW+auJqkbTuNRwxV22Sm6r69ZJwV0WspvsVJi+FYqiyoWhgUCAwEAAaNQME4wHQYDVR0OBBYEFCUx063GwUhEFDllwCBe/+jdeW+XMB8GA1UdIwQYMBaAFCUx063GwUhEFDllwCBe/+jdeW+XMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBADF94c3JwyBM86QBLeoUZxRYKPniba8B39FfJk0pb+LejKfZMvspOrOFgYQQ9UrS8IFkBX9Xr7/tjRbr2cPwZNjrEZhoq+NfcE09bnaWTyEl1IEKK8TWOupJj9UNVpYXX0LfIRrMwNEzAPQykOaqPOnyHxOCPTY957xXSo3jXOyvugtvPHbd+iliAzUoPm1tgiTKWS+EkQ/e22eFv5NEyT+oHiKovrQ+voPWOIvJVMjiTyxRic8fEnI9zzV0SxWvFvty77wgcYbeEuFZa3iidhojUge8o1uY/JUyQjFxcvvfAgWSIZwdHiNyWaAgwzLPmPCPsvBdR3xrlcDg/9Bd3D0=',
    ),
  ),
);
/*FINE SIELTE PROD*/
