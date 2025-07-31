<?php

namespace App\Enums;

enum MasterOption: int
{
    // ----------- Client Types ----------- //
    case INDIVIDUAL = 1;
    case COMPANY = 2;
    case GOVERNMENT = 3;
    case NGO = 4;
    case BUILDER = 5;
    case CORPORATE = 6;
    case STARTUP = 7;
    case SCHOOL = 8;
    case OTHER = 9;

    // ----------- Quotation Status ----------- //
    case QUOTATION_DRAFT = 101;
    case QUOTATION_SENT = 102;
    case QUOTATION_ACCEPTED = 103;
    case QUOTATION_REJECTED = 104;
    case QUOTATION_EXPIRED = 105;

    // ----------- Service Types ----------- //
    case SERVICE_LOCAL_HOME = 301;
    case SERVICE_INTERCITY_HOME = 302;
    case SERVICE_OFFICE = 303;
    case SERVICE_VEHICLE = 304;
    case SERVICE_WAREHOUSE = 305;
    case SERVICE_INTERNATIONAL = 306;
    case SERVICE_STORAGE = 307;
    case SERVICE_PET = 308;
    case SERVICE_AC_INSTALL = 309;
    case SERVICE_PACK_ONLY = 310;
    case SERVICE_UNPACK_ONLY = 311;
    case SERVICE_OTHER = 312;

    // ----------- Goods Types ----------- //
    case GOODS_HOUSEHOLD = 401;
    case GOODS_OFFICE = 402;
    case GOODS_ELECTRONICS = 403;
    case GOODS_INDUSTRIAL = 404;
    case GOODS_DOCUMENTS = 405;
    case GOODS_VEHICLE = 406;
    case GOODS_FRAGILE = 407;
    case GOODS_FURNITURE = 408;
    case GOODS_MIXED = 409;
    case GOODS_OTHER = 410;

    // ----------- Move Types ----------- //
    case MOVE_HOME = 501;
    case MOVE_OFFICE = 502;
    case MOVE_COMMERCIAL = 503;
    case MOVE_VEHICLE = 504;
    case MOVE_WAREHOUSE = 505;
    case MOVE_FURNITURE = 506;
    case MOVE_LOCAL = 507;
    case MOVE_INTERCITY = 508;
    case MOVE_INTERNATIONAL = 509;
    case MOVE_OTHER = 510;

    // ----------- Vehicle Types ----------- //
    case VEHICLE_BIKE = 601;
    case VEHICLE_SCOOTER = 602;
    case VEHICLE_HATCHBACK = 603;
    case VEHICLE_SEDAN = 604;
    case VEHICLE_SUV = 605;
    case VEHICLE_THREE_WHEELER = 606;
    case VEHICLE_TATA_ACE = 607;
    case VEHICLE_PICKUP = 608;
    case VEHICLE_TRUCK_14FT = 609;
    case VEHICLE_TRUCK_17FT = 610;
    case VEHICLE_CONTAINER = 611;
    case VEHICLE_TRAILER = 612;
    case VEHICLE_OTHER = 613;

    // ----------- Floor Options (Pickup/Delivery Floor) ----------- //
    case FLOOR_GROUND = 701;
    case FLOOR_1 = 702;
    case FLOOR_2 = 703;
    case FLOOR_3 = 704;
    case FLOOR_4 = 705;
    case FLOOR_5 = 706;
    case FLOOR_6_PLUS = 707;
    case FLOOR_BASEMENT = 708;

    // ----------- Insurance Required ----------- //
    case INSURANCE_FULL = 801;
    case INSURANCE_PARTIAL = 802;
    case INSURANCE_NO = 803;

    // ----------- Labour Count ----------- //
    case LABOUR_1 = 901;
    case LABOUR_2 = 902;
    case LABOUR_3 = 903;
    case LABOUR_4 = 904;
    case LABOUR_5 = 905;
    case LABOUR_6_PLUS = 906;

    // ----------- Pickup Lift ----------- //
    case PICKUP_LIFT_YES = 1001;
    case PICKUP_LIFT_NO = 1002;

    public function label(): string
    {
        return match($this) {
            // Client Types
            self::INDIVIDUAL => 'Individual',
            self::COMPANY => 'Company',
            self::GOVERNMENT => 'Government',
            self::NGO => 'NGO',
            self::BUILDER => 'Builder / Real Estate',
            self::CORPORATE => 'Corporate Office',
            self::STARTUP => 'Startup',
            self::SCHOOL => 'School / College',
            self::OTHER => 'Other',

            // Quotation Status
            self::QUOTATION_DRAFT => 'Draft',
            self::QUOTATION_SENT => 'Sent',
            self::QUOTATION_ACCEPTED => 'Accepted',
            self::QUOTATION_REJECTED => 'Rejected',
            self::QUOTATION_EXPIRED => 'Expired',

             // ----------- Service Types ----------- //
             self::SERVICE_LOCAL_HOME => 'Local Home Shifting',
             self::SERVICE_INTERCITY_HOME => 'Intercity Home Shifting',
             self::SERVICE_OFFICE => 'Office Relocation',
             self::SERVICE_VEHICLE => 'Vehicle Transport',
             self::SERVICE_WAREHOUSE => 'Warehouse Relocation',
             self::SERVICE_INTERNATIONAL => 'International Move',
             self::SERVICE_STORAGE => 'Storage / Warehousing',
             self::SERVICE_PET => 'Pet Relocation',
             self::SERVICE_AC_INSTALL => 'AC Uninstall / Install Only',
             self::SERVICE_PACK_ONLY => 'Packing Only Service',
             self::SERVICE_UNPACK_ONLY => 'Unpacking Only Service',
             self::SERVICE_OTHER => 'Other',

            // ----------- Goods Types ----------- //
            self::GOODS_HOUSEHOLD => 'Household Goods',
            self::GOODS_OFFICE => 'Office Items',
            self::GOODS_ELECTRONICS => 'Electronics & Appliances',
            self::GOODS_INDUSTRIAL => 'Industrial Equipment',
            self::GOODS_DOCUMENTS => 'Documents / Files',
            self::GOODS_VEHICLE => 'Vehicle (Car / Bike)',
            self::GOODS_FRAGILE => 'Fragile Items',
            self::GOODS_FURNITURE => 'Furniture Only',
            self::GOODS_MIXED => 'Mixed Items',
            self::GOODS_OTHER => 'Other',

            // Move Types
            self::MOVE_HOME => 'Home Relocation',
            self::MOVE_OFFICE => 'Office Shifting',
            self::MOVE_COMMERCIAL => 'Commercial Move',
            self::MOVE_VEHICLE => 'Vehicle Transport',
            self::MOVE_WAREHOUSE => 'Warehouse Move',
            self::MOVE_FURNITURE => 'Furniture Moving Only',
            self::MOVE_LOCAL => 'Local Move',
            self::MOVE_INTERCITY => 'Intercity / Long Distance',
            self::MOVE_INTERNATIONAL => 'International Move',
            self::MOVE_OTHER => 'Other',

            // Vehicle Types
            self::VEHICLE_BIKE => 'Bike',
            self::VEHICLE_SCOOTER => 'Scooter',
            self::VEHICLE_HATCHBACK => 'Hatchback Car',
            self::VEHICLE_SEDAN => 'Sedan Car',
            self::VEHICLE_SUV => 'SUV',
            self::VEHICLE_THREE_WHEELER => 'Tempo (3-Wheeler)',
            self::VEHICLE_TATA_ACE => 'Tata Ace / Chhota Hathi',
            self::VEHICLE_PICKUP => 'Pickup Truck',
            self::VEHICLE_TRUCK_14FT => '14-feet Truck',
            self::VEHICLE_TRUCK_17FT => '17-feet Truck',
            self::VEHICLE_CONTAINER => 'Containerized Truck',
            self::VEHICLE_TRAILER => 'Trailer Truck',
            self::VEHICLE_OTHER => 'Other',

            // Floor Options
            self::FLOOR_GROUND => 'Ground Floor',
            self::FLOOR_1 => '1st Floor',
            self::FLOOR_2 => '2nd Floor',
            self::FLOOR_3 => '3rd Floor',
            self::FLOOR_4 => '4th Floor',
            self::FLOOR_5 => '5th Floor',
            self::FLOOR_6_PLUS => '6th Floor or Above',
            self::FLOOR_BASEMENT => 'Basement',

            // Insurance Required
            self::INSURANCE_FULL => 'Yes - Full Coverage',
            self::INSURANCE_PARTIAL => 'Yes - Partial Coverage',
            self::INSURANCE_NO => 'No',

            // Labour Count Labels
            self::LABOUR_1 => '1 Labour',
            self::LABOUR_2 => '2 Labours',
            self::LABOUR_3 => '3 Labours',
            self::LABOUR_4 => '4 Labours',
            self::LABOUR_5 => '5 Labours',
            self::LABOUR_6_PLUS => '6+ Labours',

            // Pickup Lift
            self::PICKUP_LIFT_YES => 'Yes (Lift Available)',
            self::PICKUP_LIFT_NO => 'No (Lift Not Available)',
        };
    }
}
