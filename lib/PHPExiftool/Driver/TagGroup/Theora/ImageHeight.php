<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Theora;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageHeight extends AbstractTagGroup
{
    protected string $id = 'Theora:ImageHeight';

    protected string $name = 'ImageHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Theora::Identification
             * line : 279711
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Theora::Identification.Theora:ImageHeight',
            'desc' => [
                'en' => 'Image Height',
            ],
        ],
    ];

    protected int $count = 0;
}
