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
class USMLensElectronicMF extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:USMLensElectronicMF';

    protected string $name = 'USMLensElectronicMF';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'USM Lens Electronic MF',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions1D
             * line : 53564
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions1D.CanonCustom:USMLensElectronicMF',
            'desc' => [
                'en' => 'USM Lens Electronic MF',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54401
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:USMLensElectronicMF',
            'desc' => [
                'en' => 'USM Lens Electronic MF',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
