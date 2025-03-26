<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AutoExposure extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:AutoExposure';

    protected string $name = 'AutoExposure';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Auto Exposure',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 281822
             * type : boolean
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::crd.XMP-crd:AutoExposure',
            'desc' => [
                'en' => 'Auto Exposure',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
