<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SemanticName extends AbstractTagGroup
{
    protected string $id = 'SubIFD:SemanticName';

    protected string $name = 'SemanticName';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Semantic Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84787
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Exif::Main.SubIFD:SemanticName',
            'desc' => [
                'en' => 'Semantic Name',
            ],
        ],
    ];

    protected int $count = 0;
}
