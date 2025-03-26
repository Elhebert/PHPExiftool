<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirstLanguage extends AbstractTagGroup
{
    protected string $id = 'RIFF:FirstLanguage';

    protected string $name = 'FirstLanguage';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'First Language',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::Info
             * line : 231472
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::Info.RIFF:FirstLanguage',
            'desc' => [
                'en' => 'First Language',
            ],
        ],
    ];

    protected int $count = 0;
}
