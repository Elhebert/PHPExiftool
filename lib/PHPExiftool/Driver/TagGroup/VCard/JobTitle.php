<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\VCard;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JobTitle extends AbstractTagGroup
{
    protected string $id = 'VCard:JobTitle';

    protected string $name = 'JobTitle';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Job Title',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : VCard::Main
             * line : 279914
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'VCard::Main.VCard:JobTitle',
            'desc' => [
                'en' => 'Job Title',
            ],
        ],
    ];

    protected int $count = 0;
}
