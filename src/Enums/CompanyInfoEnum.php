<?php

namespace Qostel\Qos\Enums;


enum CompanyInfoEnum: string 
{
    case email = 'email da empresa';  
    case phone = 'telefone principal da empresa';
    case logotipo = 'logotipo da empresa';
    case HeroImage = 'banner (hero) do site';
    case sobre = 'sobre a empresa';
    case whatsapp = 'whatsapp da empresa';
}

