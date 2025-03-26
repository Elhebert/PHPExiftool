<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NumImportantColors extends AbstractTagGroup
{
    protected string $id = 'File:NumImportantColors';

    protected string $name = 'NumImportantColors';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : BMP::Main
             * line : 3338
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BMP::Main.File:NumImportantColors',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
