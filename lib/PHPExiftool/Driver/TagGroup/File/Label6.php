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
class Label6 extends AbstractTagGroup
{
    protected string $id = 'File:Label6';

    protected string $name = 'Label6';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Label 6',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MRC::Main
             * line : 113688
             * type : string
             * writable : false
             * count : 80
             * flags :
             */
            'id' => 'MRC::Main.File:Label6',
            'desc' => [
                'en' => 'Label 6',
            ],
        ],
    ];

    protected int $count = 80;
}
