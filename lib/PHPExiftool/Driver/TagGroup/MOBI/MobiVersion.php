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
class MobiVersion extends AbstractTagGroup
{
    protected string $id = 'MOBI:MobiVersion';

    protected string $name = 'MobiVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Mobi Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Palm::MOBI
             * line : 190944
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Palm::MOBI.MOBI:MobiVersion',
            'desc' => [
                'en' => 'Mobi Version',
            ],
        ],
    ];

    protected int $count = 0;
}
