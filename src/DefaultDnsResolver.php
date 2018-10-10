<?php

declare(strict_types=1);

namespace ChrisHarrison\DnsResolver;

final class DefaultDnsResolver implements DnsResolver
{
    public function resolve($domain, $type = DNS_ANY): array
    {
        $result = dns_get_record($domain, $type);
        if (!is_array($result)) {
            return [];
        }
        return $result;
    }
}
