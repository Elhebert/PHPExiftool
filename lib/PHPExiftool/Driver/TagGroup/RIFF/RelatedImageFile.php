<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RelatedImageFile extends AbstractTagGroup
{
    protected string $id = 'RIFF:RelatedImageFile';

    protected string $name = 'RelatedImageFile';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::Exif
             * line : 327905
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::Exif.RIFF:RelatedImageFile',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
