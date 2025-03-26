<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpMM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RenditionClass extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpMM:RenditionClass';

    protected string $name = 'RenditionClass';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Rendition Class',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpMM
             * line : 292214
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::xmpMM.XMP-xmpMM:RenditionClass',
            'desc' => [
                'en' => 'Rendition Class',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
