<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_extensis;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Approved extends AbstractTagGroup
{
    protected string $id = 'XMP-extensis:Approved';

    protected string $name = 'Approved';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Approved',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::extensis
             * line : 288702
             * type : boolean
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::extensis.XMP-extensis:Approved',
            'desc' => [
                'en' => 'Approved',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
