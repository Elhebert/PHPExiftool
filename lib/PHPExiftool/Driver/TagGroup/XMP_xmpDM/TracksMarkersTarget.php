<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TracksMarkersTarget extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:TracksMarkersTarget';

    protected string $name = 'TracksMarkersTarget';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Tracks Markers Target',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291658
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:TracksMarkersTarget',
            'desc' => [
                'en' => 'Tracks Markers Target',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
