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
class RentalFlag extends AbstractTagGroup
{
    protected string $id = 'MOBI:RentalFlag';

    protected string $name = 'RentalFlag';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Rental Flag',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Palm::EXTH
             * line : 190824
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Palm::EXTH.MOBI:RentalFlag',
            'desc' => [
                'en' => 'Rental Flag',
            ],
        ],
    ];

    protected int $count = 0;
}
