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
class FifthLanguage extends AbstractTagGroup
{
    protected string $id = 'RIFF:FifthLanguage';

    protected string $name = 'FifthLanguage';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Fifth Language',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::Info
             * line : 231484
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::Info.RIFF:FifthLanguage',
            'desc' => [
                'en' => 'Fifth Language',
            ],
        ],
    ];

    protected int $count = 0;
}
