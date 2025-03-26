<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SetFunctionWhenShooting extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:SetFunctionWhenShooting';

    protected string $name = 'SetFunctionWhenShooting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Set Function When Shooting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 55730
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:SetFunctionWhenShooting',
            'desc' => [
                'en' => 'Set Function When Shooting',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 55974
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:SetFunctionWhenShooting',
            'desc' => [
                'en' => 'Set Function When Shooting',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 56513
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:SetFunctionWhenShooting',
            'desc' => [
                'en' => 'Set Function When Shooting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
