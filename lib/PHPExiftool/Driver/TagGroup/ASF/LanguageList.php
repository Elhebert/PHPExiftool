<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LanguageList extends AbstractTagGroup
{
    protected string $id = 'ASF:LanguageList';

    protected string $name = 'LanguageList';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Language List',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ASF::HeaderExtension
             * line : 937
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ASF::HeaderExtension.ASF:LanguageList',
            'desc' => [
                'en' => 'Language List',
            ],
        ],
    ];

    protected int $count = 0;
}
