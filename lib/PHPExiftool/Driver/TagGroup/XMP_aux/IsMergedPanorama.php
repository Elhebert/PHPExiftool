<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_aux;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IsMergedPanorama extends AbstractTagGroup
{
    protected string $id = 'XMP-aux:IsMergedPanorama';

    protected string $name = 'IsMergedPanorama';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Is Merged Panorama',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::aux
             * line : 281675
             * type : boolean
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::aux.XMP-aux:IsMergedPanorama',
            'desc' => [
                'en' => 'Is Merged Panorama',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
