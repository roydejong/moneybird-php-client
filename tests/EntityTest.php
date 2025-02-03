<?php

namespace Picqer\Tests;

use PHPUnit\Framework\TestCase;
use Picqer\Financials\Moneybird\Entities\Administration;
use Picqer\Financials\Moneybird\Entities\Contact;
use Picqer\Financials\Moneybird\Entities\ContactCustomField;
use Picqer\Financials\Moneybird\Entities\ContactPeople;
use Picqer\Financials\Moneybird\Entities\CustomField;
use Picqer\Financials\Moneybird\Entities\DocumentStyle;
use Picqer\Financials\Moneybird\Entities\Estimate;
use Picqer\Financials\Moneybird\Entities\ExternalSalesInvoice;
use Picqer\Financials\Moneybird\Entities\ExternalSalesInvoiceDetail;
use Picqer\Financials\Moneybird\Entities\ExternalSalesInvoicePayment;
use Picqer\Financials\Moneybird\Entities\FinancialAccount;
use Picqer\Financials\Moneybird\Entities\FinancialMutation;
use Picqer\Financials\Moneybird\Entities\GeneralDocument;
use Picqer\Financials\Moneybird\Entities\GeneralJournalDocument;
use Picqer\Financials\Moneybird\Entities\Identity;
use Picqer\Financials\Moneybird\Entities\ImportMapping;
use Picqer\Financials\Moneybird\Entities\LedgerAccount;
use Picqer\Financials\Moneybird\Entities\Note;
use Picqer\Financials\Moneybird\Entities\Product;
use Picqer\Financials\Moneybird\Entities\Project;
use Picqer\Financials\Moneybird\Entities\PurchaseInvoice;
use Picqer\Financials\Moneybird\Entities\PurchaseInvoiceDetail;
use Picqer\Financials\Moneybird\Entities\Receipt;
use Picqer\Financials\Moneybird\Entities\ReceiptDetail;
use Picqer\Financials\Moneybird\Entities\ReceiptPayment;
use Picqer\Financials\Moneybird\Entities\RecurringSalesInvoice;
use Picqer\Financials\Moneybird\Entities\RecurringSalesInvoiceCustomField;
use Picqer\Financials\Moneybird\Entities\RecurringSalesInvoiceDetail;
use Picqer\Financials\Moneybird\Entities\SalesInvoice;
use Picqer\Financials\Moneybird\Entities\SalesInvoiceDetail;
use Picqer\Financials\Moneybird\Entities\SalesInvoiceEvent;
use Picqer\Financials\Moneybird\Entities\SalesInvoicePayment;
use Picqer\Financials\Moneybird\Entities\SalesInvoiceReminder;
use Picqer\Financials\Moneybird\Entities\SalesInvoiceTaxTotal;
use Picqer\Financials\Moneybird\Entities\Subscription;
use Picqer\Financials\Moneybird\Entities\TaxRate;
use Picqer\Financials\Moneybird\Entities\TimeEntry;
use Picqer\Financials\Moneybird\Entities\TypelessDocument;
use Picqer\Financials\Moneybird\Entities\User;
use Picqer\Financials\Moneybird\Entities\Webhook;
use Picqer\Financials\Moneybird\Entities\Workflow;
use Picqer\Financials\Moneybird\Moneybird;

/**
 * Class EntityTest.
 *
 * Tests all entities to ensure entities have no PHP parse errors and have
 * at least the properties we need to use the entity
 */
class EntityTest extends TestCase
{
    public function testAdministrationEntity()
    {
        $this->performEntityTest(Administration::class);
    }

    public function testContactEntity()
    {
        $this->performEntityTest(Contact::class);
    }

    public function testContactPeopleEntity()
    {
        $this->performEntityTest(ContactPeople::class);
    }

    public function testContactCustomFieldEntity()
    {
        $this->performEntityTest(ContactCustomField::class);
    }

    public function testCustomFieldEntity()
    {
        $this->performEntityTest(CustomField::class);
    }

    public function testDocumentStyleEntity()
    {
        $this->performEntityTest(DocumentStyle::class);
    }

    public function testEstimateEntity()
    {
        $this->performEntityTest(Estimate::class);
    }

    public function testExternalSalesInvoice()
    {
        $this->performEntityTest(ExternalSalesInvoice::class);
    }

    public function testExternalSalesInvoiceDetail()
    {
        $this->performEntityTest(ExternalSalesInvoiceDetail::class);
    }

    public function testExternalSalesInvoicePayment()
    {
        $this->performEntityTest(ExternalSalesInvoicePayment::class);
    }

    public function testFinancialAccountEntity()
    {
        $this->performEntityTest(FinancialAccount::class);
    }

    public function testFinancialMutationEntity()
    {
        $this->performEntityTest(FinancialMutation::class);
    }

    public function testGeneralDocumentEntity()
    {
        $this->performEntityTest(GeneralDocument::class);
    }

    public function testGeneralJournalDocumentEntity()
    {
        $this->performEntityTest(GeneralJournalDocument::class);
    }

    public function testIdentityEntity()
    {
        $this->performEntityTest(Identity::class);
    }

    public function testImportMappingEntity()
    {
        $this->performEntityTest(ImportMapping::class);
    }

    public function testLedgerAccountEntity()
    {
        $this->performEntityTest(LedgerAccount::class);
    }

    public function testProductEntity()
    {
        $this->performEntityTest(Product::class);
    }

    public function testProjectEntity()
    {
        $this->performEntityTest(Project::class);
    }

    public function testPurchaseInvoiceEntity()
    {
        $this->performEntityTest(PurchaseInvoice::class);
    }

    public function testPurchaseDetailInvoiceEntity()
    {
        $this->performEntityTest(PurchaseInvoiceDetail::class);
    }

    public function testReceiptEntity()
    {
        $this->performEntityTest(Receipt::class);
    }

    public function testReceiptDetailEntity()
    {
        $this->performEntityTest(ReceiptDetail::class);
    }

    public function testReceiptPaymentEntity()
    {
        $this->performEntityTest(ReceiptPayment::class);
    }

    public function testRecurringSalesInvoiceEntity()
    {
        $this->performEntityTest(RecurringSalesInvoice::class);
    }

    public function testRecurringSalesInvoiceDetailEntity()
    {
        $this->performEntityTest(RecurringSalesInvoiceDetail::class);
    }

    public function testRecurringSalesInvoiceCustomFieldEntity()
    {
        $this->performEntityTest(RecurringSalesInvoiceCustomField::class);
    }

    public function testSalesInvoiceEntity()
    {
        $this->performEntityTest(SalesInvoice::class);
    }

    public function testSalesInvoiceDetailEntity()
    {
        $this->performEntityTest(SalesInvoiceDetail::class);
    }

    public function testSalesInvoiceEventEntity()
    {
        $this->performEntityTest(SalesInvoiceEvent::class);
    }

    public function testSalesInvoicePaymentEntity()
    {
        $this->performEntityTest(SalesInvoicePayment::class);
    }

    public function testSalesInvoiceReminderEntity()
    {
        $this->performEntityTest(SalesInvoiceReminder::class);
    }

    public function testSalesInvoiceTaxTotalEntity()
    {
        $this->performEntityTest(SalesInvoiceTaxTotal::class);
    }

    public function testSubscriptionEntity()
    {
        $this->performEntityTest(Subscription::class);
    }

    public function testNoteEntity()
    {
        $this->performEntityTest(Note::class);
    }

    public function testTaxRateEntity()
    {
        $this->performEntityTest(TaxRate::class);
    }

    public function testTimeEntryEntity()
    {
        $this->performEntityTest(TimeEntry::class);
    }

    public function testTypelessDocumentEntity()
    {
        $this->performEntityTest(TypelessDocument::class);
    }

    public function testUserEntity()
    {
        $this->performEntityTest(User::class);
    }

    public function testWebhookEntity()
    {
        $this->performEntityTest(Webhook::class);
    }

    public function testWorkflowEntity()
    {
        $this->performEntityTest(Workflow::class);
    }

    public function testMoneybirdClass()
    {
        $reflectionClass = new \ReflectionClass(Moneybird::class);

        $this->assertTrue($reflectionClass->isInstantiable());
        $this->assertTrue($reflectionClass->hasProperty('connection'));
        $this->assertEquals('Picqer\Financials\Moneybird', $reflectionClass->getNamespaceName());
    }

    private function performEntityTest($entityName)
    {
        $reflectionClass = new \ReflectionClass($entityName);

        $this->assertTrue($reflectionClass->isInstantiable());
        $this->assertTrue($reflectionClass->hasProperty('fillable'));
        $this->assertTrue($reflectionClass->hasProperty('endpoint'));
        $this->assertEquals('Picqer\Financials\Moneybird\Entities', $reflectionClass->getNamespaceName());
    }
}
