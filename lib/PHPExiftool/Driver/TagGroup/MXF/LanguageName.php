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
class LanguageName extends AbstractTagGroup
{
    protected string $id = 'MXF:LanguageName';

    protected string $name = 'LanguageName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Language Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116421
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:LanguageName',
            'desc' => [
                'en' => 'Language Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116424
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:LanguageName',
            'desc' => [
                'en' => 'Language Name',
            ],
        ],
    ];

    protected int $count = 0;
}
