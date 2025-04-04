<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exif;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ComponentsConfiguration extends AbstractTagGroup
{
    protected string $id = 'XMP-exif:ComponentsConfiguration';

    protected string $name = 'ComponentsConfiguration';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Components Configuration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::exif
             * line : 287828
             * type : integer
             * writable : true
             * count :
             * flags : list,seq
             */
            'id' => 'XMP::exif.XMP-exif:ComponentsConfiguration',
            'desc' => [
                'en' => 'Components Configuration',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
