<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoCodingSchemeID extends AbstractTagGroup
{
    protected string $id = 'MXF:VideoCodingSchemeID';

    protected string $name = 'VideoCodingSchemeID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Video Coding Scheme ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115520
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:VideoCodingSchemeID',
            'desc' => [
                'en' => 'Video Coding Scheme ID',
            ],
        ],
    ];

    protected int $count = 0;
}
