<?php
declare(strict_types=1);

// AlanPerlisQuotes SDK base feature

class AlanPerlisQuotesBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(AlanPerlisQuotesContext $ctx, array $options): void {}
    public function PostConstruct(AlanPerlisQuotesContext $ctx): void {}
    public function PostConstructEntity(AlanPerlisQuotesContext $ctx): void {}
    public function SetData(AlanPerlisQuotesContext $ctx): void {}
    public function GetData(AlanPerlisQuotesContext $ctx): void {}
    public function GetMatch(AlanPerlisQuotesContext $ctx): void {}
    public function SetMatch(AlanPerlisQuotesContext $ctx): void {}
    public function PrePoint(AlanPerlisQuotesContext $ctx): void {}
    public function PreSpec(AlanPerlisQuotesContext $ctx): void {}
    public function PreRequest(AlanPerlisQuotesContext $ctx): void {}
    public function PreResponse(AlanPerlisQuotesContext $ctx): void {}
    public function PreResult(AlanPerlisQuotesContext $ctx): void {}
    public function PreDone(AlanPerlisQuotesContext $ctx): void {}
    public function PreUnexpected(AlanPerlisQuotesContext $ctx): void {}
}
