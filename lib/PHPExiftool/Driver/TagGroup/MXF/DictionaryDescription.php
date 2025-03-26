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
class DictionaryDescription extends AbstractTagGroup
{
    protected string $id = 'MXF:DictionaryDescription';

    protected string $name = 'DictionaryDescription';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Dictionary Description',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116049
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:DictionaryDescription',
            'desc' => [
                'en' => 'Dictionary Description',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116052
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:DictionaryDescription',
            'desc' => [
                'en' => 'Dictionary Description',
            ],
        ],
    ];

    protected int $count = 0;
}
