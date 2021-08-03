<?php

return [
    /*
    |--------------------------------------------------------------------------
    | cert file /cert_data
    |--------------------------------------------------------------------------
    |
    | Certificate used to crypt data. You can find it in the developer kit at https://sistemats1.sanita.finanze.it/portale/spese-sanitarie/documenti-e-specifiche-tecniche-strumenti-per-lo-sviluppo
    | Use cert_file to point to a file or cert_data to directly feed the certificate as a string. 
    | By default, we use 
    |
    */
    'cert_file' => env('TS_CERT_FILE',null),
    'cert_data' => env('TS_CERT_DATA','
-----BEGIN CERTIFICATE-----
MIIEkjCCAnqgAwIBAgIISbny2mZ0+qIwDQYJKoZIhvcNAQELBQAwUDELMAkGA1UE
BhMCSVQxHjAcBgNVBAoMFUFnZW56aWEgZGVsbGUgRW50cmF0ZTEhMB8GA1UEAwwY
Q0EgQWdlbnppYSBkZWxsZSBFbnRyYXRlMB4XDTIxMDIyNjEzMjc0OFoXDTI0MDIy
NzEzMjc0OFowXjELMAkGA1UEBhMCSVQxHjAcBgNVBAoMFUFnZW56aWEgZGVsbGUg
RW50cmF0ZTEbMBkGA1UECwwSU2Vydml6aSBUZWxlbWF0aWNpMRIwEAYDVQQDDAlT
YW5pdGVsQ0YwgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBANQfl8dJ65QsUGAI
RviObyQPA2AYBpxgVjTimrn+B9C9YUSz6bbZv83ZX5dMYb368G6zsJhvZvoqVZQG
ofz5psc9HzXNAtZ9BqaZfFQ1JJmdenarRSsTdPWXuJrkktAMQ10hEo1By2fG2oy1
f934idprxOvcoxsO6tqSF8W9MtHvAgMBAAGjgeUwgeIwHwYDVR0jBBgwFoAUrsVd
VIjaAAwlPJ1qgpTX7CJbd70wgY8GA1UdHwSBhzCBhDCBgaB/oH2Ge2xkYXA6Ly9j
YWRzLmVudHJhdGUuZmluYW56ZS5pdC9DTj1DQSUyMEFnZW56aWElMjBkZWxsZSUy
MEVudHJhdGUsTz1BZ2VuemlhJTIwZGVsbGUlMjBFbnRyYXRlLEM9SVQ/Y2VydGlm
aWNhdGVSZXZvY2F0aW9uTGlzdDAdBgNVHQ4EFgQUk40paPskEoq8te6R8PK19/Bb
02AwDgYDVR0PAQH/BAQDAgQwMA0GCSqGSIb3DQEBCwUAA4ICAQBVLkFeRMqcY2kk
FBG6BGuWfcn4MEQXD0jglVH8O4avQCwEoOaxJMXXNPIzxZ/GcZALwLnOWloZWVVu
1UHAic04A+xMaNGqpWDzjBGrv2k/Dolyf0qYLeqP3JFim5ftx2hFOWTdWFZ/7/Z3
V4Es9JfLg3Ts+1q+JZ5YOmEiqQEtqXA20YYb8aYdu2uPg8HVDI7Do7Wf98sS3dYN
mg+wDOhd6WVkf9qQqAITrNKsgUoXy2mHE5iF69HrwRP4HeRo0zz7R8t7Jz8ytlRG
wQYE10wdhOlI//i6GdKXM6UEMVhGVQ8P3zHZ2LF3GGVsZoey2hAlNCcfPw0q6Yr+
uZQ1IfLHO1pWVgygL1oBpV+74lKsoNszY4v+KGvThCRU9UZ45/+FHH0AhWhJmkHz
66H5/x5Xbvdbf5lWJST+wPvu8Ic7p3x6tCRJDavk6JSyNJ13ATA0UnuMtTc1PkDw
dTEd8Gp4jTv4kh/5rMey0oZQz+Y9MKda2MP2eiBHEsGr7Ujbm0wzt8Td15I/28jn
mlXwjzdvio+InsVg3bH9xNdj0IL5xbOJquHUooZVMfiQHqcRzDQvENphVa9KVNyR
QokY6bsLtnHY/L2VsnoJ3BMXchXXnQOiKwebVe41JNyoL85h3wVLYQyIJXJHGKYu
yOukb9CRvgr1irK7KY6Hkpdua2RnuA==
-----END CERTIFICATE-----
'),
    /*
     |--------------------------------------------------------------------------
     | Url
     |--------------------------------------------------------------------------
     |
     | Endpoint default list
     | 
     |
     */
    'url' => [
        'test' => [
            'https://invioSS730pTest.sanita.finanze.it/InvioTelematicoSS730pMtomWeb/InvioTelematicoSS730pMtomPort',
            'https://invioSS730pTest.sanita.finanze.it/Ricevute730ServiceWeb/ricevutePdf',
            'https://invioSS730pTest.sanita.finanze.it/EsitoStatoInviiWEB/DettaglioErrori730Service',
            'https://invioSS730pTest.sanita.finanze.it/EsitoStatoInviiWEB/EsitoInvioDatiSpesa730Service',
            'https://invioSS730pTest.sanita.finanze.it/DocumentoSpesa730pWeb/DocumentoSpesa730pPortì',
            'https://invioSS730pTest.sanita.finanze.it/ReportMensile730Web/ReportMensilePort',
            'https://invioSS730pTest.sanita.finanze.it/InterrogazionePuntuale730Web/InterrogazionePuntuale730Port',
            'https://invioSS730pTest.sanita.finanze.it/Interrogazioni730pWeb/DettaglioSegnalazione730pPort',
            'https://invioSS730pTest.sanita.finanze.it/Interrogazioni730pWeb/ReportSegnalazioni730pPort',
        ],
        'production' => [
            'https://invioSS730p.sanita.finanze.it/InvioTelematicoSS730pMtomWeb/InvioTelematicoSS730pMtomPort',
            'https://invioSS730p.sanita.finanze.it/Ricevute730ServiceWeb/ricevutePdf',
            'https://invioSS730p.sanita.finanze.it/EsitoStatoInviiWEB/DettaglioErrori730Service',
            'https://invioSS730p.sanita.finanze.it/EsitoStatoInviiWEB/EsitoInvioDatiSpesa730Service',
            'https://invioSS730p.sanita.finanze.it/DocumentoSpesa730pWeb/DocumentoSpesa730pPort',
            'https://invioSS730p.sanita.finanze.it/ReportMensile730Web/ReportMensilePort',
            'https://invioSS730p.sanita.finanze.it/InterrogazionePuntuale730Web/InterrogazionePuntuale730Port',
            'https://invioSS730p.sanita.finanze.it/Interrogazioni730pWeb/DettaglioSegnalazione730pPort',
            'https://invioSS730p.sanita.finanze.it/Interrogazioni730pWeb/ReportSegnalazioni730pPort',
        ],
    ],
];
