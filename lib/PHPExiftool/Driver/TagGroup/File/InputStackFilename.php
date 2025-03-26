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
class InputStackFilename extends AbstractTagGroup
{
    protected string $id = 'File:InputStackFilename';

    protected string $name = 'InputStackFilename';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MRC::FEI12
             * line : 166730
             * type : string
             * writable : false
             * count : 80
             * flags :
             */
            'id' => 'MRC::FEI12.File:InputStackFilename',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 80;
}
