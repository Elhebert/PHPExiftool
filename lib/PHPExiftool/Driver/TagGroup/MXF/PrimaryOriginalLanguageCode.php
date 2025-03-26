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
class PrimaryOriginalLanguageCode extends AbstractTagGroup
{
    protected string $id = 'MXF:PrimaryOriginalLanguageCode';

    protected string $name = 'PrimaryOriginalLanguageCode';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Primary Original Language Code',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116961
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:PrimaryOriginalLanguageCode',
            'desc' => [
                'en' => 'Primary Original Language Code',
            ],
        ],
    ];

    protected int $count = 0;
}
