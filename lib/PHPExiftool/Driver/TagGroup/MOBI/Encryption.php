<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MOBI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Encryption extends AbstractTagGroup
{
    protected string $id = 'MOBI:Encryption';

    protected string $name = 'Encryption';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Encryption',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Palm::MOBI
             * line : 190872
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Palm::MOBI.MOBI:Encryption',
            'desc' => [
                'en' => 'Encryption',
            ],
        ],
    ];

    protected int $count = 0;
}
