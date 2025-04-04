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
class VideoAndFilmFrameRelationship extends AbstractTagGroup
{
    protected string $id = 'MXF:VideoAndFilmFrameRelationship';

    protected string $name = 'VideoAndFilmFrameRelationship';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Video And Film Frame Relationship',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114464
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:VideoAndFilmFrameRelationship',
            'desc' => [
                'en' => 'Video And Film Frame Relationship',
            ],
        ],
    ];

    protected int $count = 0;
}
