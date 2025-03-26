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
class GPSImgDirection extends AbstractTagGroup
{
    protected string $id = 'XMP-ast:GPSImgDirection';

    protected string $name = 'GPSImgDirection';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ast
             * line : 209794
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Nikon::ast.XMP-ast:GPSImgDirection',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
