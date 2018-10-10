<?php

declare(strict_types=1);

namespace ChrisHarrison\DnsResolver;

interface DnsResolver
{
    public function resolve($domain, $type = DNS_ANY): array;
}
