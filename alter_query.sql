alter table `taxcellent_new`.`order_details` 
   add column `raz_id` text NULL after `updated_at`

alter table `taxcellent_new`.`order_details` 
   add column `entity` text NULL after `raz_id`, 
   add column `raz_amount` int(20) NULL after `entity`, 
   add column `raz_currency` varchar(20) NULL after `raz_amount`, 
   add column `raz_payment_status` varchar(255) NULL after `raz_currency`, 
   add column `raz_description` text NULL after `raz_payment_status`, 
   add column `raz_fee` int(20) NULL after `raz_description`, 
   add column `raz_tax` int(20) NULL after `raz_fee`, 
   add column `raz_created_at` timestamp NULL after `raz_tax`