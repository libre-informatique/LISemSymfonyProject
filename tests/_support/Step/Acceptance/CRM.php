<?php
namespace Step\Acceptance;

class CRM extends \WebGuy
{
    public function createCircle()
    {
        $this->wantTo('Create Group (Circle)');
        $this->amOnPage('/lisem/librinfo/crm/circle/list');
        $this->testLink('Ajouter', 'Nom');
        $this->fillField("//input[contains(@id, 'name')]", 'SelGroup');
        $this->fillField("//input[contains(@id, 'code')]", 'SELGRP');
        $this->fillField("//textarea[contains(@id, 'description')]", 'Sel desc');
        $this->selectDrop('_type', 'Autres');

        $this->clickCreate();
    }

    public function deleteCircle($filter = 'Sel')
    {
        $this->wantTo('Delete Group (Circle)');
        $this->amOnPage('/lisem/librinfo/crm/circle/list');
        $this->testLink('Filtres');
        $this->wait(1);
        $this->click('i.fa.fa-square-o');
        //$this->click("//ul[2]/li/ul/li/a/i");
        $this->wait(1);
        $this->click("//input[@id='filter_name_value']");
        $this->fillField("//input[@id='filter_name_value']", $filter);
        $this->click("//button[@type='submit']");
        $this->wait(1);
        $this->click('//label/div/ins');
        $this->click("//input[@value='OK']");
        $this->click("//button[@type='submit']");
        $this->waitForText('succès', 30); // secs
    }
    
    public function createCategory($selCat, $selCatParent = null)
    {
        $this->wantTo('Create Category');

        $this->amOnPage('/lisem/librinfo/crm/category/list');
        $this->testLink('Ajouter', 'Nom');

        $this->fillField("//input[contains(@id,'name')]", $selCat);
        if (isset($selCatParent)) {
            $this->selectDrop('_treeParent', 'SelCatParent');
        }
        $this->clickCreate();
    }

    public function deleteCategory($filter = 'Sel')
    {
        $this->wantTo('Delete Category');
        $this->amOnPage('/lisem/librinfo/crm/category/list');
        $this->testLink('Filtres');
        $this->wait(1);
        $this->click('i.fa.fa-square-o');
        $this->wait(1);
        $this->click("//input[@id='filter_name_value']");
        $this->fillField("//input[@id='filter_name_value']", $filter);
        $this->click("//button[@type='submit']");
        $this->click('//label/div/ins');
        $this->click("//input[@value='OK']");
        $this->click("//button[@type='submit']");
        $this->waitForText('succès', 30); // secs
    }
}
