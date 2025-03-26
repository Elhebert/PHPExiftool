<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_ast;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSImgDirectionRef extends AbstractTagGroup
{
    protected string $id = 'XMP-ast:GPSImgDirectionRef';

    protected string $name = 'GPSImgDirectionRef';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPS Img Direction Ref',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ast
             * line : 141417
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Nikon::ast.XMP-ast:GPSImgDirectionRef',
            'desc' => [
                'en' => 'GPS Img Direction Ref',
            ],
        ],
    ];

    protected int $count = 0;
}
