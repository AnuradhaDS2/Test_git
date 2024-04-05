alter table da_material
    add column `Work Center` text,
    add column `Material Description` text,
    add column `Functional Location` text,
    add column `Total Qty` int,
    add column `Redeployment` int,
    add column `Operational` int,
    add column `Faulty` int,
    add column `Mark for Disposal` int,
    add column `Repaired` int,
    add column `Sent to Vendor` int,
    add column `Under Repair` int,
    add column `Damaged` int,
    add column `Swapped Asset` int,
    add column `Obsolete` int,
    add column `Friendly Name` text,
    add column `Region` text,
    add column `OPER` int,
    add column `FLTY` int,
    drop Functional_Location,
    drop Material_code,
    drop Friendly_name,
    drop description ;





